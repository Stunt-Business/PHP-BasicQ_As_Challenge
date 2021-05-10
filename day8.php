<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 8 : Challenge II - Basic Calculator
// Day 8 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge II - Basic Calculator
// ----------------------------------------------------
//  what would be the output of this program ?

// add operands
function add_operands($a, $b){
    return $a + $b;
}

// subtract operands
function sub_operands($a, $b){
    return $a-$b;
}

// function divide operands
function divide_operands($a, $b){
    if($b == 0){
        throw new Exception("A number can not be divided by zero");
    }else{
        return $a/$b;
    }
}

// multiply operands 
function multiply_operands($a,$b){
    return $a*$b;
}


$a = $_POST["oper1"];
$b = $_POST["oper2"];
$op = $_POST["op"];

switch($op){
    case "+":
        $r = add_operands($a,$b);
        echo "<br><span>The result of the  addition of $a and $b is $r </span><br>";
        break;
    case "*":
        $r = multiply_operands($a,$b);
        echo "<br><span>The result of the multiplication of $a and $b is $r </span><br>";
        break;
    case "/":
        try{
            $r = divide_operands($a, $b);
            echo "<br><span>The result of the division of $a and $b is $r </span><br>";
        }catch(Exception $e){
            echo "Error message : ". $e -> getMessage();
        }
        break;
    case "-":
        $r = sub_operands($a, $b);
        echo "<br><span>The result of the subtraction of $a and $b is $r </span><br>";
        break ;
}

?>