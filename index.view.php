<!DOCTYPE html>
<html>
<head>
	<title>DiceS3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>



<div class="container">
	<h3 class="mt-2">DiceS3 <i class="fas fa-dice"></i></h3>

	<div class="card p-2">
		<div>
			<form method="POST">
				<div class="form-group">
					<input class="form-control" type="number" name="maxDiceValue" value="<?php echo $maxDiceValue; ?>" placeholder="Maximum value of the dice(s)" required="">
				</div>
				<div class="form-group">
					<input class="form-control" type="number" name="numberOfDices" value="<?php echo $numberOfDices; ?>" placeholder="Number of dices" required="">
				</div>
				<div>
					<button class="btn btn-success">Roll! <i class="fas fa-skull"></i></button>
				</div>
				
			</form>
		</div>
	</div>
	

	<div class="card mt-2 p-2">
		<div class="fontsizes">
			<?php
				for ($i=0; $i < $numberOfDices; $i++) { 
					new Dice(1, $maxDiceValue);
				}
				$_SESSION['numberOfDices'] = $numberOfDices;
				$_SESSION['maxDiceValue'] = $maxDiceValue;
			?>
		</div>
	</div>
</div>

</body>
</html>