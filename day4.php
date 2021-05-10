<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 4 : Challenge I -Process input sent from webpage form.
// Day 4 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge I -Process input sent from webpage form.
// ----------------------------------------------------
//  what would be the output of this program ?

/**
 * 
 *  Process the user input received from your webpage
 *  Use the integer entered by the user in the created function.
 *  This function return the double of the parameter.
 * 
 * 
 */

 // collect the user input
$user_input = $_POST["usr-input"];
$user_input = htmlspecialchars($user_input);


// function the return the double of the parameter
function double_parameter($in){
    return $in * 2;
}

echo "<h1> Program Output </h1><br>";
echo "You entered : ". $user_input." <br><br>";
echo "The double of your parameter is ". double_parameter($user_input);
echo "<br>@<br><hr>";

?>