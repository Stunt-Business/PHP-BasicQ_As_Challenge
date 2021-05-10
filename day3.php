<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 4 : Functions
// Day 4 | IG : https://www.instagram.com/benjivrik/
// Subject :  Functions
// ----------------------------------------------------
//  what would be the output of this program ?

// first function
// this function is 'echoing' a sentence
function firstFunction(){
    echo "<br>First function called.<br>";
}

// second function 
// this function is 'echoing' a sentence 
// and return the value passed as parameter
function secondFunction($x){
    echo "<br> The value received as parameter is ". $x . "<br>";
    return $x;
}


// third function 
// From PHP 7, the datatypes of your parameters can be specified
// multiplying two floats and returning a float
function multiply(float $x, float $y): float{
    echo "<br> The value x received as parameter is ". $x . "<br>";
    echo "The value y received as parameter is ". $y . "<br>";
    return $x * $y;
}   


// call your functions defined above
echo "<br><h5> → firstFunction() output below : </br>";
firstFunction();
echo "<br><h5> → secondFunction(\$x) output below : </h5><br>";
echo "The return value is : ". secondFunction("HEY");
echo "<br><br><h5> →  multiply(\$x, \$y) output below : </h5><br>";
echo "The result is : ". multiply(5.3, 8.6);
echo "<br>";


?>