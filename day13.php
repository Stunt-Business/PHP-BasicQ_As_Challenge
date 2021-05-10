<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 13 : Object Oriented Programming (OOP)
// Day 13 | IG : https://www.instagram.com/benjivrik/
// Subject :  Object Oriented Programming (OOP)
// ----------------------------------------------------
// What would be the output of this program ?
// Access modifier public, protected, private
// public : default modifier.  The property is accessible from everywhere
// protected : the property can be accessed from derived classes or within the class
// private : the property can only be accessed within the class


class Human{

    public $name;
    protected $age;
    private $eye_color;

    function __construct($name, $age, $eye_color)
    {
        $this->name = $name;
        $this->age  = $age;
        $this->eye_color = $eye_color;
        echo "<br><span>'Human' Object Created</span><br>";
    }

    // called when the script ends or stops
    function __destruct()
    {
        echo "Human Object {$this->name} destroyed!";
    }

    function get_eye_color(){
        return $this -> eye_color;
    }

    function set_eye_color($eye_color){
        $this -> eye_color = $eye_color;
    }

    function get_age(){
        return $this-> age;
    }

}

//
echo "<br><h4> Creating the Human Object </h4>";
// Human Object
$h =  new Human("Stunt",1,"brown");
// display the name
echo "<br>→ Human name : $h->name <br>";
// display the eye color
// $h -> eye_color; // will throw an error (private)
$eye_color = $h->get_eye_color();
echo "<br>→ Human eye color : $eye_color <br>";

// change the eye color
$h->set_eye_color("blue");
$eye_color =  $h->get_eye_color();
echo "<br>→ New human eye color : $eye_color <br>";

// get age
// $h -> age; // will throw an error (private)
$age = $h->get_age();
echo "<br>→ Human age : $age <br>";

?>