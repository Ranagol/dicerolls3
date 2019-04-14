<?php
session_start();

var_dump($_SESSION['numberOfDices']);
var_dump($_SESSION['maxDiceValue']);



if ($_SESSION['numberOfDices'] == null && $_SESSION['maxDiceValue'] == null && $_POST['numberOfDices'] == null) {// IF SESSION AND POST IS NULL
	$numberOfDices = 1;
	$maxDiceValue = 6;
	echo "VALUES TAKEN FROM DEFAULT HARD CODED DATA";
	echo $numberOfDices;
	echo $maxDiceValue;
} 

if ($_POST['numberOfDices'] !== null && $_POST['maxDiceValue'] !== null) {//IF POST IS NOT NULL
	$numberOfDices = $_POST['numberOfDices'];
	$maxDiceValue = $_POST['maxDiceValue'];
	echo "VALUES TAKEN FROM POST";
} elseif ($_SESSION['numberOfDices'] !== null && $_SESSION['maxDiceValue'] !== null) {
	$numberOfDices = $_SESSION['numberOfDices'];
	$maxDiceValue = $_SESSION['maxDiceValue'];
	echo "VALUES TAKEN FROM PREVIOUS SESSION";
}



/*
if ($_POST['numberOfDices'] !== null && $_POST['maxDiceValue'] !== null) {
	$numberOfDices = $_POST['numberOfDices'];
	$maxDiceValue = $_POST['maxDiceValue'];
	echo "POST VAS RECEIVED, POST IS NOT NULL ANYMORE";
	
} 
*/



require 'dice.php';
require 'index.view.php';
?>