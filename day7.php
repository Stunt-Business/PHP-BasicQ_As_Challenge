<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 7 : Conditions and booleans
// Day 7 | IG : https://www.instagram.com/benjivrik/
// Subject :  Conditions and booleans
// ----------------------------------------------------
//  what would be the output of this program ?

// if..else if..else or switch

 /**
       if( condition )
        {
    
            when this condition  is True, this block executes
        
        }
        else if( condition )
        {
        
            when the previous condition is not executed
            if this condition is True, this block executes
            
        }
        else 
        {
            if none of the above conditions are satisfied, this
            block executes
        }
     */

// return $p * 2
function double_parameter($p){
    return $p * 2;
}

// return $p+2
function add_two_to_the_parameter($p){
    return $p + 2;
}

// return $p/2
function divide_parameter_by_two($p){
    return $p/2;
}


$user_input = $_POST['usr-input'];
$user_input = htmlspecialchars($user_input);

echo "<br><span>→ Your input is : $user_input </span><br>";


echo "<br><h4><b> if..else if..else block </b></h4> ";
// result
$res = 0;

if($user_input < 5){
    // add 2 to the parameter
    $res = add_two_to_the_parameter($user_input);
    echo "<br><div>→ After adding 2 to your input, the result is $res </div><br>";
}else if( $user_input >= 5 && $user_input <= 10){
    // divide the parameter by 2
    $res = divide_parameter_by_two($user_input);
    echo "<br><div>→ After dividing your input by 2, the result is $res </div><br>";
}else{
    // multiply by 2
    $res = double_parameter($user_input);
    echo "<br><div>→ After multiplying your input by 2, the result is $res </div><br>";
}


echo "<br><h4><b> switch block </b></h4> ";

// switch the result and check if it has been multiplied by 2, 
// divided by 2 or 2 has been removed from it
switch($res){
    case ($res*2)==$user_input:
        echo "<br><span>→ The result $res was obtained using 
        the method divide_parameter_by_two($user_input)</span><br>";
        break;
    case ($res/2)==$user_input:
        echo "<br><span>→ The result $res was obtained using 
        the method double_parameter($user_input)</span><br>";
        break;
    case ($res-2)==$user_input:
        echo "<br><span>→ The result $res was obtained using 
        the method add_two_to_the_parameter($user_input)</span><br>";
        break;
    default :
        echo "<br<span>→ The result a problem with the result ($res). 
        It does not match the cases. </span><br>";
        break;
}

?>