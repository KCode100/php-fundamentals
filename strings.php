<?php
    $txt="this is a string";
// STRING LENGTH
    echo strlen($txt);
    echo "<br>";
// WORD COUNT
    echo str_word_count($txt);
    echo "<br>";
// REVERSE STRING
    echo strrev($txt);
    echo "<br>";
// SEARCH A STRING
    echo strpos($txt,"string");
    echo "<br>";
// REPLACE WORD IN STRING
    echo str_replace("a string", "replaced", $txt);
?>