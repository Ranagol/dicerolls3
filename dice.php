<?php

class Dice{
	

	//THIS IS THE MIN AND MAX NUMBER OF THE DICE
	public $randomNumber = 0;
	public $randomNumberMinimum = 1;
	public $maxDiceNumber = 0;


	public function __construct($randomNumberMinimum, $maxDiceNumber){
		$this->maxDiceNumber = $maxDiceNumber;
		$this->randomNumber = rand($randomNumberMinimum,$maxDiceNumber);//here we create a random number between the min and max dice value
			
				switch ($this->randomNumber){
				case '1':
					$this->drawDice1Dot();
					break;
				case '2':
					$this->drawDice2Dot();
					break;
				case '3':
					$this->drawDice3Dot();
					break;
				case '4':
					$this->drawDice4Dot();
					break;
				case '5':
					$this->drawDice5Dot();
					break;
				case '6':
					$this->drawDice6Dot();
					break;
				case '7':
					$this->drawDice7Dot();
					break;
				case '8':
					$this->drawDice8Dot();
					break;
				case '9':
					$this->drawDice9Dot();
					break;
				default://all the numbers bigger than 9 (numbers that will have numeric display, not a rectangle/dot display)
					echo $this->randomNumber . ' ';
					break;
			}	
	}




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
		imagepng($imSquare, "image1.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=image1.png>";
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
		imagepng($imSquare, "image2.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=image2.png>";
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
		imagepng($imSquare, "image3.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=image3.png>";
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
		imagepng($imSquare, "image4.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=image4.png>";
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
		imagepng($imSquare, "image5.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=image5.png>";
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
		imagepng($imSquare, "image6.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=image6.png>";
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
		imagepng($imSquare, "image7.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=image7.png>";
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
		imagepng($imSquare, "image8.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=image8.png>";
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
		imagepng($imSquare, "image9.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=image9.png>";
	}

	public function drawDiceNumeric(){
		//creating the rectangle, defining the colors
		$imSquare =  imageCreate(60, 60);//this is the whole image
		$background_color = imagecolorallocate($imSquare, 255, 255, 255);
		$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
		$yellow = imagecolorallocate($imSquare, 255, 255, 0);
		ImageFilledRectangle($imSquare,2,2,56,56,$yellow);

		//text part (number display)
		

		//creating and echoing the png file
		imagepng($imSquare, "imageNumeric.png");
		imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.
		print "<img src=imageNumeric.png>";
	}


}

?>