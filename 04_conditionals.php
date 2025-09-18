<?php

//If-else + COMPARISON OPERATORS
/*
== double equal - checks the value of two numbers
=== three equal - checks their type 
!= or <> not equal
!== not equal
< less than
<= les than or equalto
> greater than
>= greater than or equal to

*/

$age = 10;
//CONDITIONAL OPERATORS
$title = 'CONDITIONAL OPERATORS';
echo $title . '<br>';
if ($age <= 12) {
    echo '<br>'.'Too young to watch Harry Potter.';
} else if ($age < 14) {
    echo '<br>'.'You may watch Harry Potter';
} else {
    echo '<br>'.'You should watch Harry Potter.';
}
    echo '<br>';

$age =  25;
if ($age <= 2) {
    echo 'Masarap si leo.';
} else {
    echo 'Hindi masarap si leo. ';
}
    echo '<br> <hr>';

//LOGICAL OPERATORS
/*
&& - and
|| - or
! - not
*/
$title_logical = 'LOGICAL OPERATORS';
$age = 15;
$watched = true;

echo $title_logical . '<br>';
if ($age >= 15 && !$watched) {
    echo '<br>'. 'You MUST watch Harry Potter';
} 

if ($age >= 15 || !$watched) {
    echo '<br>'.'You SHOULD watch Harry Potter';
} 
    echo '<br> <hr>';

//SWITCH
$day = 3;
$title_switch = 'SWITCH';

echo $title_switch .'<br>';
switch ($day) {
    case 1:
        echo '<br>'.'Monday';
        break;
    case 2:
        echo '<br>'.'Tuesday';
        break;
    case 3:
        echo '<br>'.'Wednesday';
        break;
    default:
        echo '<br>'.'Invalid Day';
}
?>