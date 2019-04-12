<?php
session_start();


$numberOfDices = $_SESSION['numberOfDices'];
$maxDiceValue = $_SESSION['maxDiceValue'];

if (isset($_POST)) {
	$numberOfDices = $_POST['numberOfDices'];
	$maxDiceValue = $_POST['maxDiceValue'];
}

require 'dice.php';
require 'index.view.php';
?>