<?php

class Dice{
	

	//THIS IS THE MIN AND MAX NUMBER OF THE DICE
	public $randomNumber = 0;
	public $randomNumberMinimum = 1;
	public $maxDiceNumber = 0;
	public $string = 0;

	


	//-------------------------


	public function __construct($randomNumberMinimum, $maxDiceNumber){
		$this->maxDiceNumber = $maxDiceNumber;
		$this->randomNumber = 10;//rand($randomNumberMinimum,$maxDiceNumber);//here we create a random number between the min and max dice value
			
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


//------------------------------------------
	public function justDoIt(){//THIS IS THE FINAL COMMAND FOR CREATING A RECTANGLE, THAT INCLUDES ALL OTHER COMMANDS
		$inProgress1 = $this->createRectangle();
		$inProgress2 = $this->dots3($inProgress1['imSquare'], $inProgress1['blueDot']);
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

	public function dots3($imSquare, $blueDot){//THIS CREATES THE DOTS
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);		
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		return $imSquare;
	}

	public function saveImage($imSquare){//THIS SAVES EVERYTHING INTO A .PNG FILE
		$fileName = 'images/image' . $this->randomNumber . '.png';
		imagepng($imSquare, $fileName);
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		echo '<img src=' . $fileName . '>';
	}

	
	

//---------------------------------






	public function drawDiceNumeric(){//THIS IS THE PATTERN FOR ALL THE NUMBERS ABOVE 9
		//creating the rectangle, defining the colors
		
		//unlink($this->string);
		/*
		$imSquareX =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquareX, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquareX, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquareX, 255, 255, 0);
		ImageFilledRectangle($imSquareX,2,2,56,56,$yellow);
		*/
		//text part (number display)
		
		
		
		$imSquare = $this->createRectangle();

		imagestring($imSquare['imSquare'],5,20,20,$this->randomNumber,$imSquare['blueDot']);

		$array = [ 'images/', $this->randomNumber,'.', 'png'];//here we create a string from randomNumber a . and a png. This will be the name of the image.
		$string = implode("",$array);

		
		imagepng($imSquare['imSquare'], $string);
		imagedestroy($imSquare['imSquare']);
		echo '<img src=' . $string . '>';
		
	}


	/*	//----TESTING PROPERTIES

	public $imSquare;
	public $background_color;
	public $blueDot;
	public $yellow;
	public $insideRectangle;
	public $pngCreate;
	public $freeUpResources;


	public $dot1;
	public $dot2;
	public $dot3;
	public $dot4;
	public $dot5;
	public $dot6;
	public $dot7;
	public $dot8;
	public $dot9;*/
	


}






/*
	public function drawDice1Dot(){
		//creating the rectangle, defining the colors
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);

		//dot control part
		
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);		

		//creating and echoing the png file
		imagepng($imSquare, "images/image1.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=images/image1.png>";
		
		
	}





	public function drawDice2Dot(){
		//creating the rectangle, defining the colors
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);

		//dot control part
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);

		//creating and echoing the png file
		imagepng($imSquare, "images/image2.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=images/image2.png>";
	}

	public function drawDice3Dot(){
		//creating the rectangle, defining the colors
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);

		//dot control part
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);		
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);

		//creating and echoing the png file
		imagepng($imSquare, "images/image3.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=images/image3.png>";
	}

	public function drawDice4Dot(){
		//creating the rectangle, defining the colors
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);

		//dot control part
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);

		//creating and echoing the png file
		imagepng($imSquare, "images/image4.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=images/image4.png>";
	}

	public function drawDice5Dot(){
		//creating the rectangle, defining the colors
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);

		//dot control part
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);		
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);		
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);		
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);		
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);

		//creating and echoing the png file
		imagepng($imSquare, "images/image5.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=images/image5.png>";
	}

	public function drawDice6Dot(){
		//creating the rectangle, defining the colors
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);

		//dot control part
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);		
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot4 = imagefilledellipse($imSquare, 12, 30, 9, 9, $blueDot);		
		$dot6 = imagefilledellipse($imSquare, 48, 30, 9, 9, $blueDot);
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);

		//creating and echoing the png file
		imagepng($imSquare, "images/image6.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=images/image6.png>";
	}

	public function drawDice7Dot(){
		//creating the rectangle, defining the colors
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);

		//dot control part
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot4 = imagefilledellipse($imSquare, 12, 30, 9, 9, $blueDot);
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);
		$dot6 = imagefilledellipse($imSquare, 48, 30, 9, 9, $blueDot);
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);

		//creating and echoing the png file
		imagepng($imSquare, "images/image7.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=images/image7.png>";
	}

	public function drawDice8Dot(){
		//creating the rectangle, defining the colors
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);

		//dot control part
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);
		$dot2 = imagefilledellipse($imSquare, 30, 12, 9, 9, $blueDot);
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot4 = imagefilledellipse($imSquare, 12, 30, 9, 9, $blueDot);
		$dot6 = imagefilledellipse($imSquare, 48, 30, 9, 9, $blueDot);
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot8 = imagefilledellipse($imSquare, 30, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);

		//creating and echoing the png file
		imagepng($imSquare, "images/image8.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=images/image8.png>";
	}

	public function drawDice9Dot(){
		//creating the rectangle, defining the colors
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);

		//dot control part
		$dot1 = imagefilledellipse($imSquare, 12, 12, 9, 9, $blueDot);
		$dot2 = imagefilledellipse($imSquare, 30, 12, 9, 9, $blueDot);
		$dot3 = imagefilledellipse($imSquare, 48, 12, 9, 9, $blueDot);
		$dot4 = imagefilledellipse($imSquare, 12, 30, 9, 9, $blueDot);
		$dot5 = imagefilledellipse($imSquare, 30, 30, 9, 9, $blueDot);
		$dot6 = imagefilledellipse($imSquare, 48, 30, 9, 9, $blueDot);
		$dot7 = imagefilledellipse($imSquare, 12, 48, 9, 9, $blueDot);
		$dot8 = imagefilledellipse($imSquare, 30, 48, 9, 9, $blueDot);
		$dot9 = imagefilledellipse($imSquare, 48, 48, 9, 9, $blueDot);

		//creating and echoing the png file
		imagepng($imSquare, "images/image9.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=images/image9.png>";
	}

*/
?>