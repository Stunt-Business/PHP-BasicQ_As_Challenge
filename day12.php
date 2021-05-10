<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 12: PHP JSON  
// Day 12 | IG : https://www.instagram.com/benjivrik/
// Subject :  PHP JSON 
// ----------------------------------------------------
// What would be the output of this program ?
// JSON: JavaScript Object Notation

// json_encode()
// encode a php array into a JSON Object 
$your_arr =  array("30 Days", "Challenge", "From", "Stunt Business");
echo "<br><br><h4> Initial PHP Array </h4><br>";
var_dump($your_arr);

echo "<br><br><h4> Encoded JSON data </h4><br>";
$json_data = json_encode($your_arr);
var_dump($json_data);


// encode a php associative array into a JSON Object
$your_assoc_arr =  array(
    "numDay"  => "30 Days", 
    "about"   => "Challenge", 
    "nothing" => "From", 
    "company" => "Stunt Business");
echo "<br><br><h4> Initial PHP Associative Array </h4><br>";
var_dump($your_assoc_arr);

echo "<br><br><h4> Encoded JSON data </h4><br>";
$json_data_assoc =  json_encode($your_assoc_arr);
var_dump($json_data_assoc);
// json_decode()
// decode the JSON Objects into PHP Objects
echo "<br><br><h4> Initial JSON data </h4><br>";
var_dump($json_data);

echo "<br><br><h4> Decoded PHP Object </h4><br>";
$arr_dec = json_decode($json_data);
var_dump($arr_dec);

echo "<br><br><h4> Initial JSON data </h4><br>";
var_dump($json_data_assoc);

echo "<br><br><h4> Decoded PHP Object </h4><br>";
$arr_dec_assoc = json_decode($json_data_assoc);
var_dump($arr_dec_assoc);


?>