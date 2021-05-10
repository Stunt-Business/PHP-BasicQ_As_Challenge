<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 6 : Loops
// Day 6 | IG : https://www.instagram.com/benjivrik/
// Subject :  Loops
// ----------------------------------------------------
//  what would be the output of this program ?
// for | do..while | while | for each

// for loop
echo "<br><h4><b> for loop </b></h4> ";
for($x=0; $x< 5; $x++){
    echo "<br><span> For loop output - iteration $x. </span><br>";
}

// do...while
// the block inside the 'do' is always executed once then the condition is checked
echo "<br><h4><b> do...while loop </b></h4> ";
$x = 0;
do{
   echo "<br><span> do...while loop output - iteration $x. </span><br>";
   $x++;
}while($x < 5);

// while
echo "<br><h4><b> while loop </b></h4> ";
$x = 0;
while($x < 5){
    echo "<br><span> while loop output - iteration $x. </span><br>";
    $x++;
}

// for...each
// iterating through each element of an array
// associative array in which you associate a key to the corresponding item
echo "<br><h4><b> foreach loop </b></h4> ";

$your_assoc_arr =  array(
    "numDay"  => "30 Days", 
    "about"   => "Challenge", 
    "nothing" => "From", 
    "company" => "Stunt Business");

foreach($your_assoc_arr as $key=>$content){
    echo "<br><span> key : $key - content : $content. </span><br>";
}

echo "<br>";


?>