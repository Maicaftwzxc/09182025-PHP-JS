<?php

// STRINGS: https://www.php.net/manual/en/ref.strings.php 
    $str = 'HELLP FROM PHP';
    echo strtolower($str). '<br>';
    echo strtoupper($str). '<br>';
    echo str_replace('PHP', 'TheCodeholic', $str). '<br>'; //replace the word PHP to TheCodeholic
    echo str_word_count($str). '<br>';

?>