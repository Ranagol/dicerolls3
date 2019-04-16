<?php

class Dice{

	//THIS IS THE MIN AND MAX NUMBER OF THE DICE
	public $randomNumber = 0;
	public $randomNumberMinimum = 1;
	public $maxDiceNumber = 0;
	public $string = 0;

	
	public function __construct($randomNumberMinimum, $maxDiceNumber){
		$this->maxDiceNumber = $maxDiceNumber;
		$this->randomNumber = rand($randomNumberMinimum,$maxDiceNumber);//here we create a random number between the min and max dice value
			
				switch ($this->randomNumber){
				case '1':
					$this->justDoIt();//why is this not working? What is the solution?
					break;
				case '2':
					$this->justDoIt();
					break;
				case '3':
					$this->justDoIt();
					break;
				case '4':
					$this->justDoIt();
					break;
				case '5':
					$this->justDoIt();
					break;
				case '6':
					$this->justDoIt();
					break;
				case '7':
					$this->justDoIt();
					break;
				case '8':
					$this->justDoIt();
					break;
				case '9':
					$this->justDoIt();
					break;

				default://all the numbers bigger than 9 (numbers that will have numeric display, not a rectangle/dot display)		
					$this->drawDiceNumeric();					
					break;
			}	
	}


	public function dot1($imSquare, $blueDot){		
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);
		return $imSquare;		
	}

	public function dot2($imSquare, $blueDot){
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);
		return $imSquare;
	}

	public function dot3($imSquare, $blueDot){
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);
		return $imSquare;
	}

	public function dot4($imSquare, $blueDot){
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);		
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);		
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);
		return $imSquare;
	}

	public function dot5($imSquare, $blueDot){
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);		
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);		
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);	
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);
		return $imSquare;
	}

	public function dot6($imSquare, $blueDot){
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);		
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot4 = imagefilledellipse($imSquare, 12, 30, 9, 9, $blueDot);	
		$dot6 = imagefilledellipse($imSquare, 48, 30, 9, 9, $blueDot);
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);
		return $imSquare;
	}

	public function dot7($imSquare, $blueDot){
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot4 = imagefilledellipse($imSquare, 12, 30, 9, 9, $blueDot);
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);
		$dot6 = imagefilledellipse($imSquare, 48, 30, 9, 9, $blueDot);
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);
		return $imSquare;
	}

	public function dot8($imSquare, $blueDot){
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);
		$dot2 = imagefilledellipse($imSquare, 30, 12, 9, 9, $blueDot);
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot4 = imagefilledellipse($imSquare, 12, 30, 9, 9, $blueDot);
		$dot6 = imagefilledellipse($imSquare, 48, 30, 9, 9, $blueDot);
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot8 = imagefilledellipse($imSquare, 30, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);
		return $imSquare;
	}

	public function dot9($imSquare, $blueDot){
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);
		$dot2 = imagefilledellipse($imSquare, 30, 12, 9, 9, $blueDot);
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot4 = imagefilledellipse($imSquare, 12, 30, 9, 9, $blueDot);
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);
		$dot6 = imagefilledellipse($imSquare, 48, 30, 9, 9, $blueDot);
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot8 = imagefilledellipse($imSquare, 30, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);
		return $imSquare;
	}


//------------------------------------------BELOW WE CREATE THE DICES UNDER 9, WITH THE DOTS
	public function justDoIt(){//THIS IS THE FINAL COMMAND FOR CREATING A RECTANGLE, THAT INCLUDES ALL OTHER COMMANDS
		$inProgress1 = $this->createRectangle();
		$functionName = 'dot' . $this->randomNumber;
		$inProgress2 = $this->$functionName($inProgress1['imSquare'], $inProgress1['blueDot']);
		$this->saveImage($inProgress2);
	}

	public function createRectangle(){//THIS CREATES A RECTANGLE
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);
		return ['imSquare' => $imSquare, 'blueDot' => $blueDot];
	}

	

	public function saveImage($imSquare){//THIS SAVES EVERYTHING INTO A .PNG FILE
		$fileName = 'images/image' . $this->randomNumber . '.png';
		imagepng($imSquare, $fileName);
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		echo '<img src=' . $fileName . '>';
	}

	
	

//---------------------------------


	public function drawDiceNumeric(){//THIS IS THE PATTERN FOR ALL THE NUMBERS ABOVE 9, FOR THE NUMERICAL DICES
		
		$imSquare = $this->createRectangle();
		imagestring($imSquare['imSquare'],5,20,20,$this->randomNumber,$imSquare['blueDot']);
		$array = [ 'images/', $this->randomNumber,'.', 'png'];//here we create a string from randomNumber a . and a png. This will be the name of the image.
		$string = implode("",$array);
		imagepng($imSquare['imSquare'], $string);
		imagedestroy($imSquare['imSquare']);
		echo '<img src=' . $string . '>';
	}

}

?>