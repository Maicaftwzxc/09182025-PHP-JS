<?php

//what is variable - container to store some data, allows to reuse values

//variables  & types
/*
string
integer
boolean
float or double
null
array
object
resource
*/

$name = 'Zura';
$age = 32;
$isFather = true;
$money = 19.99;
$salary = null;
$title = 'THIS IS PHP';

//print the variables

echo $title; 
echo "<br> <hr> Hello" . $name . "!<br>";
echo "Hello ($name)! <br>";
echo 'Hello {name}!<br>';
echo $age ."<br>";
echo $isFather. "<br>";
echo $money. "<br>";
echo $salary ."<br> <hr>";


//print types of the variable 

echo gettype($name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($isFather) . "<br>";
echo gettype($money) . "<br>";
echo gettype($salary) . "<br> <hr>";

//print the whole variable

print_r($name); //print the info about the rays
echo '<br>';
var_dump($name); //print the info of the variable (string (4) ZURA)
echo "<br>";


//change the value of a name

$name = 32;
echo gettype($name);
echo '<br> <hr>';


//variable checking junctions

var_dump(is_string($name));
echo "<br>";
var_dump(is_string($age));
echo '<br>';
var_dump(is_int($age));
echo '<br>';
var_dump(is_bool($isFather));
echo '<br>';
var_dump(is_double($money));
echo '<br>';
var_dump(is_float($money));
echo '<br> <hr>';


//check if variable is defined
//isset - to check if the variable is existing or set

var_dump(isset($name));
echo "<br>";
var_dump(isset($country));
echo "<br>";
var_dump(isset($salary));
echo "<br>";

?>

