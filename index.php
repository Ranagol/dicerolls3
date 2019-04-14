<?php
session_start();

//var_dump($_SESSION);
//var_dump($_POST);
//var_dump($_POST['numberOfDices']);
//var_dump($_POST['maxDiceValue']);

	$numberOfDices = isset($_POST['numberOfDices']) ? $_POST['numberOfDices'] : 0;//TERNARY OPERATOR SOLITION FOR THE PROBLEMS CAUSED AT THE BEGINNING WHEN THE FORM IS EMPTY, AND THERE ARE NO VALUES PASSED FROM THE FORM
	$maxDiceValue = isset($_POST['maxDiceValue']) ? $_POST['maxDiceValue'] : 0;//TERNARY OPERATOR SOLITION FOR THE PROBLEMS CAUSED AT THE BEGINNING WHEN THE FORM IS EMPTY, AND THERE ARE NO VALUES PASSED FROM THE FORM

require 'dice.php';
require 'index.view.php';
?>