<?php

    //SIMPLE FUNCTION
    function sayHello() {
        echo 'Hello, World!' . '<br>';
    }
        sayHello();

    //WITH PARAMETER
    /*function greet($name) {
        echo "Hello, $name!";
    }
        greet('Alice'); 
        echo '<br>';
        greet('Bob');*/

    //PARAMETER DEFAULT (parameter can be optional)
    function greet($name = 'Guest') {
        echo "Hello, $name!";
    }
        greet();
        echo '<br>';
        greet('Alice');
        echo '<br>';


    //RETURN FROM FUNCTION
    function multiply($a, $b) {
        return $a * $b;
    }
    $result = multiply(4, 3);
    echo $result;
?>