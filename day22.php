<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 22 : Challenge VIII - Geometric shape classes (Circle & Square)
// Day 22 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge VIII - Geometric shape classes (Circle & Square)
// ----------------------------------------------------
//  what would be the output of this program ?

interface Shape{
    function area();
    function perimeter();
}

class Circle implements Shape{

    private $radius;

    function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    function area() {
       return pi()*pow($this->radius,2);
    }

    function perimeter() {
        return 2*pi()*$this->radius;
    }

    // setters and getters (TO COMPLETE WHEN NEEDED)
    function getRadius(){
        return $this->radius;
    }
}

class Square implements Shape{

    private $side;

    function __construct(float $side)
    {
        $this->side = $side;
    }

    function area() {
        return $this->side * $this->side;
     }
 
     function perimeter() {
         return $this->side * 4;
     }

    // setters and getters (TO COMPLETE WHEN NEEDED)
    function getSide(){
        return $this->side;
    }
}

// initialize your circle
$circ = new Circle(rand(5,50));

// initialize your square
$sq = new Square(rand(5,50));

?>