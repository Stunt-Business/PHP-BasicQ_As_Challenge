<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 18 : 
// Day 18 | IG : https://www.instagram.com/benjivrik/
// Subject :  Interfaces
// ----------------------------------------------------
//  what would be the output of this program ?

// an interface allows you to define a set of methods' signatures that you need to find
// inside the class implementing that interface. 
// class ClassName implements InterfaceName

// include('./day13.php'); 

interface HumanI {
    function introduce();
    function dream();
    // add whatever you want 
}

// StudentI extending the implementation of the class Human (Day13)
// StudentI implementing the interface HumanI
// StudentI must have an implementation for the methods introduce() and dream()
class StudentI extends Human implements HumanI{

     private $student_id;
     private $year_level;
     
     // constructor
     function __construct($name, $age, $eye_color, $student_id, $year_level){
        Human::__construct($name,$age, $eye_color);
        $this->student_id = $student_id;
        $this->year_level = $year_level;
        echo "<br> Student Object {$name} created!<br>";
     }

     // destructor
     function __destruct()
     {
         echo "Student Object {$this->name} destroyed!";
     }

    // required methods from the interface
    function introduce()
    {
        echo "<br><span> Hello I am ".$this->name.", and a ".$this->year_level."year student! </span><br>";
    }

    function dream()
    {
        echo "<br><span> Hey, I want to be an Engineer! </span><br>";
    }

}

// TeacherI extending the implementation of the class Human (Day13)
// TeacherI implementing the interface HumanI
// TeacherI must have an implementation for the methods introduce() and dream()
class TeacherI extends Human implements HumanI{

    private $teacher_id;
    private $teacher_class;

    // constructor
    function __construct($name, $age, $eye_color, $teacher_id, $teacher_class){
        Human::__construct($name,$age, $eye_color);
        $this->teacher_id    = $teacher_id;
        $this->teacher_class = $teacher_class;
        echo "<br> Teacher Object {$name} created! <br>";
    }

    // destructor
    function __destruct()
    {
        echo "Teacher Object {$this->name} destroyed!";
    }

    // required methods from the abstract class HumanAbs
    function introduce()
    {
        echo "<br><span> Hello I am ".$this->name.", and I am 
              the teacher of  the ".$this->teacher_class." class! </span><br>";
    }

    function dream()
    {
        echo "<br><span> Hey, I want to build my own school! </span><br>";
    }
}


echo "<br><h4> Creating the Student Object </h4>";
// Student Object
$s =  new StudentI("Stunt",25,"brown","20200305", 4);

// display the name
echo "<br>→ Student name : $s->name <br>";

// using the methods introduce() and dream()
echo $s->introduce();
echo $s->dream();

echo "<br><h4> Creating the Teacher Object </h4>";
// Teacher Object
$t =  new TeacherI("Tech",50,"brown","20200306", "TECH2500");

// display the name
echo "<br>→ Teacher name : $t->name <br>";

// using the methods introduce() and dream()
echo $t->introduce();
echo $t->dream();


?>