<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 
	echo "Hello world";

	//Variables
	$a =5;

	echo $a;


	//String Interpolation

	echo "<div>I have $a things</div>";


	//number
	//integer the whole number

	$b =15;

	//float
	$b =0.576;

	$b =10;



	//string
	$name ="Sara2";

	//boolean
	$isOn =true;


	//math
	//PEMDAS
	echo 5 + 4 - 2;
	echo 5 - 4 * 2;
	echo (5 + 4) - 2;


	//concatenation plus symbol number math .
	echo "<div>b + a" . "=c</div>";

	echo "<div>$b + $a = ".($a+$b)."</div>";


	?>


	<hr>
	<div>This is my name</div>
	
	<?php

	$firtsname ="carolina";
	$lastname ="meraz";
	$fullname = $firstname ." ". $lastname;

	//$fullname = "$firstname $lastname";   for space

	echo $fullname;
	?>


	<hr>
	<?php


	//super global
	// ?name=Susan   ?id=Susan to make up for our application

	//echo $_GET['name'];
	//echo $_GET['id'];
	echo "<a href='?name=Joey'>visit</a><br>";
	echo "<div>My name is {$_GET['name']}</div>";


	// ?name=Joey&type=textarea, built page by changing url..dinamic webpage
echo "<a href='?name=Joey&type=textarea'>visit</a><br>";
	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";




	// array
	$colors =array("red","green","blue");

	echo $colors[0];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";


	echo count($colors);



	// Assosiative array uses => put commas between each value

	$colorsAssociative =[
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f",

	];

	echo $colorsAssociative['green'];



	?>
	<hr>
	<?php

	//casting

	$c ="$a";
	$d ="$c*1";

	$colorsObject = (object)$colorsAssociative;

	// cant echo out an object....echo $colorsObject;

	echo "<hr>";

	//array indec notation
	echo $colors[0]. "<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	//object property notation -> to select value

	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";






	?>

	<hr>
	<?php
	print_r($colors);
	echo "<hr>";
	print_r($colorsAssociative);
	echo "<pre>", print_r($colorsObject),"</pre>";


	//function need values to pass into it
	function print_p($v) {
		echo "<pre>", print_r($v),"</pre>";

	}

	print_p($_GET);




	?>


	<div style="color:<?= $colors[1] ?>">this text is green</div>


</body>
</html>
</div>