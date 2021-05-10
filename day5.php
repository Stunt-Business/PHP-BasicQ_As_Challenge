<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 5 : Arrays
// Day 5 | IG : https://www.instagram.com/benjivrik/
// Subject :  Arrays
// ----------------------------------------------------
//  what would be the output of this program ?

// indexed array - using simple integer to access the elements of the arra
$your_arr =  array("30 Days", "Challenge", "From", "Stunt Business");

// get the length of your array 
$arr_length = count($your_arr);

// display the information about your array
echo "<br>";
print_r($your_arr);
echo "<br>";
echo "The length of your array is : ". $arr_length. "<br>";
echo "At index 0, element : ". $your_arr[0]."<br>";
echo "At index 1, element : ". $your_arr[1]."<br>";
echo "At index 2, element : ". $your_arr[2]."<br>";
echo "At index 3, element : ". $your_arr[3]."<br>";


// associative array in which you associate a key to the corresponding item
$your_assoc_arr =  array(
    "numDay"  => "30 Days", 
    "about"   => "Challenge", 
    "nothing" => "From", 
    "company" => "Stunt Business");

// get the length of your array 
$arr_assoc_length = count($your_assoc_arr);

// get all the keys of your associative array
$your_keys = array_keys($your_assoc_arr);

// display the information about your array
echo "<br>";
print_r($your_assoc_arr);
echo "<br><br>";
echo "All the keys of your array : ";
print_r($your_keys);
echo "<br><br>";
echo "The length of your array is : ". $arr_assoc_length."<br>";
echo "→ For the key 'numDay',  element : ". $your_assoc_arr["numDay"]."<br>";
echo "→ For the key 'about', element : ". $your_assoc_arr["about"]."<br>";
echo "→ For the key 'nothing', element : ". $your_assoc_arr["nothing"]."<br>";
echo "→ For the key 'company', element : ". $your_assoc_arr["company"]."<br>";
echo "<br>";



?>