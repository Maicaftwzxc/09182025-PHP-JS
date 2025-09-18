<?php

    //INDEXED ARRAY
    $title = 'INDEXED ARRAY' . '<br>';
    echo $title .'<br>';
    $fruits = ['APPLE' , 'BANANA' , 'CHERRY'];
    echo $fruits[0] . '<br>';
    $fruits[3] = 'Peach'; //added elements/fruits
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>' . '<hr>';

    //MIXED TYPE ARRAY
    $title_mixed = 'MIXED ARRAY' . '<br>';
    echo $title_mixed . '<br>';

    $mixedArray = [15, 'APPLE', true];
    echo '<pre>';
    var_dump($mixedArray);
    echo '</pre>' . '<hr>';

    //ASSOCIATIVE ARRAY
    $title_asso = 'ASSOCIATIVE ARRAY' . '<br>';
    echo $title_asso . '<br>';

    $user = [
        'name' => 'Zura',
        'age' => 32,
        'hobbies' => ['Coding' , 'Tennis']
    ];
    echo $user['name'] . '<br>';
    echo '<pre>';
    var_dump($user);
    echo '</pre>';
?>