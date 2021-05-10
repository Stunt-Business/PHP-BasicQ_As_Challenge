<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 15 : Challenge IV - Basic Calculator
// Day 15 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge IV - Basic Calculator
// ----------------------------------------------------
//  what would be the output of this program ?


class Calculator{

    function __construct()
    {
        echo "<br><span> Calculator created! </span><br>";
    }

    // add operands
    function add_operands(float $a, float $b){
        return $a + $b;
    }

    // multiply
    function multiply_operands(float $a, float $b){
        return $a * $b;
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

    // function square root
    function square_root(float $x): float{
        if($x < 0){
            throw new Exception("Can not calculate the square root of a negative number");
        }else{
            return sqrt($x);
        }
    }
}

// Calculator
$calc = new Calculator();

// $a and $b
$a = $_POST["oper1"];
$b = $_POST["oper2"];

// operations
try {

    $r_add = $calc->add_operands($a, $b);
    $r_mul = $calc->multiply_operands($a,$b);
    $r_div = $calc->divide_operands($a, $b);
    $r_sub = $calc->sub_operands($a,$b);

    $sqrt_a = $calc->square_root($a);
    $sqrt_b = $calc->square_root($b);

    echo "<br><span>The result of the  addition of $a and $b is $r_add   </span><br>";
    echo "<br><span>The result of the subtraction of $a and $b is $r_sub </span><br>";
    echo "<br><span>The result of the multiplication of $a and $b is $r_mul </span><br>";
    echo "<br><span>The result of the division of $a and $b is $r_div    </span><br>";
    echo "<br><span>The square root of $a is $sqrt_a </span><br>";
    echo "<br><span>The square root of $b is $sqrt_b </span><br>";


} catch (Exception $e) {
    echo "Error message : ". $e -> getMessage();
}


?>