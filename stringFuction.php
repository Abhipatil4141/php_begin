<?php

$name = "AbhiPatil from Koregaon";
echo $name;
echo "<br>";

//strlen
echo strlen($name ); // for lenght of string

echo  " The lenght of my String is " . strlen($name);

// to add the sting use of dot . operator

echo "<br>";

// str_word_count
// to count the words in string 
echo str_word_count($name);
echo "<br>";

// strrev 
// to revvise the string 

echo strrev($name);
echo "<br>";

// strpos 
// to indentified the index for word 

echo strpos($name ,"from");
echo "<br>";

// str_replace 
// to replace the string 

echo str_replace( "AbhiPatil" ,"pratham" ,$name );
echo "<br>";

// strrepeat 
// to repeated the string 

echo str_repeat($name ,5);
echo "<br>";


// rtrim -for right side triming
// ltrim - for left side triming
echo "<prev>";
echo rtrim("    this is rit collge       ");
echo "<br>";
echo "</prev>"



?>