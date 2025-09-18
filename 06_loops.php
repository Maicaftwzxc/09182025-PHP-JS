<?php

    //FOR LOOP
    //three parts of loop: definition of loop variable, condition and increment
    for ($i = 1; $i <= 5; $i++) {
        echo $i . ' ';
    }
        echo '<br>';

    //WHILE LOOP
    $i = 1;
    while ($i <= 5) {
        echo $i . ' ';
        $i++;
    }
        echo '<br>';
    //FOREACH LOOP
    $fruits = ['APPLE', 'BANANA', 'CHERRY'];

    foreach ($fruits as $fruit) {
        echo $fruit . ' ';
    }

?>