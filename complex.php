
<html>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
#Coded By Yakup Yavaş
#Complex Number PHP Class
class Complex {

	public $real; 
	public $imaginer;
	public $comp_numb;
	public $degree;



	function __construct() //constructor method
	{
		$this->real=0;
		$this->imaginer=0;
		$this->comp_numb=0;
		$this->degree=0;

	}

	public function set_comp_num($real=0,$imaginer=0) // define our complex number
	{
		
 		if(is_numeric($real) && is_numeric($imaginer))
		{
			$this->real=$real;
		    $this->imaginer=$imaginer;
		   
		    if ($this->imaginer >= 0) 
		    {
		    	$comp_numb=$this->real."+".$this->imaginer."j";
		    }
		    else
		    {
		    	$comp_numb=$this->real.$this->imaginer."j";
		    }
		   
		    $this->comp_numb=$comp_numb;
		
		 

		}
		else
		{
			echo "Invalid format";
		}


	}

	public function modulus()//Modulus of the complex number
	{
		
		$modul=pow($this->real,2)+pow($this->imaginer,2); //pow function
		
		if((int)(sqrt($modul))==sqrt($modul)) //sqrt function(Distance from the origin)
		{
			return sqrt($modul);
			
		}
		else 
		{
			return "√".$modul; // '√': Square Root Symbol
		}

	} 
	public function polar_form() //Polar form of the complex number
	{
		if ($this->real == 0) //tangent undefined at 90,270 degrees
		{ 
			
			if ($this->imaginer > 0) 
			{
				$degree=90;
				
			}		
			
			else if($this->imaginer < 0)
			{
				$degree=270;

			}
			else
			{
				$degree=0;
			}
		}
		else 
		{
			$tangent=abs($this->imaginer) / abs($this->real); //tangent value of the number
		    
		    $degree=round(rad2deg(atan($tangent)),2); //the degree of the tangent value (atan & rad2deg & round functions)
		    //convert radian to degree

		    if ($this->real > 0 && $this->imaginer >= 0) { //quadrants
		    	
		    	$degree=$degree;
		    	echo "Quadrant 1<br>";
		    }
		    
		    else if ($this->real < 0 && $this->imaginer >= 0) 
		    {
		    	
		    	$degree=180-$degree; // π - degree
		    	echo "Quadrant 2<br>";
		    }
		    
		    else if ($this->real < 0 && $this->imaginer <= 0 ) 
		    {
		    	
		    	$degree=180+$degree; // π  + degree
		    	echo "Quadrant 3<br>";
		    }
		    
		    else if ($this->real > 0 && $this->imaginer <= 0) 
		    {
		    	
		    	$degree=360-$degree; //2π - degree
		    	echo "Quadrant 4<br>";
		    }

		    $this->degree=$degree;

		   /*if ($degree < 0) {
		    	$degree = $degree +360; 
		    }*/
		}
		
		
			$polar_form=$this->modulus()."(cos $degree ° + j sin $degree °) "; //polar form of the number
			return $polar_form; //return value


	}
	public function conj_number() //calculate conj. number
	{
		$conj_real=$this->real;
		$conj_imag=-$this->imaginer; 
	
		if ($conj_imag >= 0) 
		{

		    $conj_numb=$conj_real."+".$conj_imag."j";
		}

	   else
		{
		    $conj_numb=$conj_real.$conj_imag."j";
		  
		}

		   return $conj_numb; //return value
		
	}

	public function conj_form() //conj. form of the number
	{
		$polar_conj_deg=360-$this->degree;
		$polar_conj=$this->modulus()."(cos $polar_conj_deg ° + j sin $polar_conj_deg °) "; //polar form of the conj. number
		return $polar_conj;
		    

	}


}

	#End

?>

</html>
