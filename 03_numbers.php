<?php

//NUMBERS: https://www.php.net/manual/en/ref.math.php
    $x = 25;
    $y = 2;
    echo $x + $y;
    echo '<br> <hr>';

    $title_op = 'OPERATORS';
    echo $title_op;
    $z = $x + $y ; //addition
    echo '<br>'. $z  ;
    echo '<br>';

    echo $x - $y; //subtraction
    echo '<br>';
    echo $x * $y; //multiplication
    echo '<br>';
    echo $x / $y; //division
    echo '<br>';
    echo $x % $y; //remainder
    echo '<br>';
    echo $x ** $y; //square root
    echo '<br> <hr>';

    //increment and dicrement y *increase/decrease
    $title = 'INCREMENT AND DECREMENT';
    echo $title . '<br>';
    $y++; //add 1 (increment by 1)
    echo $y. '<br>';

    $y--; //decrease
    echo $y. '<br>';

    $y += 2; //add 2 (add by 2)
    echo $y. '<br>';

    $y -= 2; //decrease
    echo $y. '<br> <hr>';

    //minimum and maximum
    $title_min = 'MINIMUM AND MAXIMUM';
    echo $title_min . '<br>';
    echo min($x, $y). '<br>';
    echo max($x, $y). '<br>';


?>