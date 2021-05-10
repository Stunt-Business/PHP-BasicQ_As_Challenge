<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 17 : 
// Day 17 | IG : https://www.instagram.com/benjivrik/
// Subject :  Abstract Classes
// ----------------------------------------------------
//  what would be the output of this program ?

// abstract a class that class that contains abstract methods
// abstract methods MUST be implemented by the derived class
// an abstract class can not be instantiated directly
// Using Human class implementation from Day13 and adding abstract method

abstract class HumanAbs{

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

    // add whatever you want as an abstract method
    abstract function introduce();
    abstract function dream();
}

// Student
class StudentAbs extends HumanAbs{

     private $student_id;
     private $year_level;
     
     // constructor
     function __construct($name, $age, $eye_color, $student_id, $year_level){
        HumanAbs::__construct($name,$age, $eye_color);
        $this->student_id = $student_id;
        $this->year_level = $year_level;
        echo "<br> Student Object {$name} created!<br>";
     }

     // destructor
     function __destruct()
     {
         echo "Student Object {$this->name} destroyed!";
     }

     // getters
     function get_student_id(){
         return $this -> student_id;
     }

     function get_year_level(){
         return $this -> year_level;
     }

    // required methods from the abstract class HumanAbs
    function introduce()
    {
        echo "<br><span> Hello I am ".$this->name.", and a ".$this->year_level."year student! </span><br>";
    }

    function dream()
    {
        echo "<br><span> Hey, I want to be an Engineer! </span><br>";
    }
}

// Teacher
class TeacherAbs extends HumanAbs{

    private $teacher_id;
    private $teacher_class;

    // constructor
    function __construct($name, $age, $eye_color, $teacher_id, $teacher_class){
        HumanAbs::__construct($name,$age, $eye_color);
        $this->teacher_id    = $teacher_id;
        $this->teacher_class = $teacher_class;
        echo "<br> Teacher Object {$name} created! <br>";
    }

    // destructor
    function __destruct()
    {
        echo "Teacher Object {$this->name} destroyed!";
    }

    // getters
    function get_teacher_id(){
        return $this->teacher_id;
    }

    function get_teacher_class(){
        return $this->teacher_class;
    }

    // required methods from the abstract class HumanAbs
    function introduce()
    {
        echo "<br><span> Hello I am ".$this->name.", and I am the teacher of  the ".$this->teacher_class." class! </span><br>";
    }

    function dream()
    {
        echo "<br><span> Hey, I want to build my own school! </span><br>";
    }
}

// $h = new HumanAbs("Stunt",1,"brown"); // will throw an error
//

echo "<br><h4> Creating the Student Object </h4>";
// Student Object
$s =  new StudentAbs("Stunt",25,"brown","20200305", 4);
// student id
$s_id = $s->get_student_id();
// student year level
$s_year = $s->get_year_level();

// display the name
echo "<br>→ Student name : $s->name <br>";
// student id
echo "<br>→ Student id : $s_id <br>";
// year level
echo "<br>→ Student year: $s_year <br>";

// using the methods introduce() and dream()
echo $s->introduce();
echo $s->dream();

// display the eye color
// $s -> eye_color; // will throw an error (private)
$eye_color = $s->get_eye_color();
echo "<br>→ Student eye color : $eye_color <br>";

// change the eye color
$s->set_eye_color("yellow");
$eye_color =  $s->get_eye_color();
echo "<br>→ New student eye color : $eye_color <br>";

// get age
// $s -> age; // will throw an error (private)
$age = $s->get_age();
echo "<br>→ Human (Student) age : $age <br>";


echo "<br><h4> Creating the Teacher Object </h4>";
// Teacher Object
$t =  new TeacherAbs("Tech",50,"brown","20200306", "TECH2500");
// teacher id
$t_id = $t->get_teacher_id();
// teacher class
$t_class = $t->get_teacher_class();

// display the name
echo "<br>→ Teacher name : $t->name <br>";
// student id
echo "<br>→ Teacher id : $t_id <br>";
// year level
echo "<br>→ Teacher class: $t_class <br>";

// using the methods introduce() and dream()
echo $t->introduce();
echo $t->dream();

// display the eye color
// $t -> eye_color; // will throw an error (private)
$eye_color = $t->get_eye_color();
echo "<br>→ Teacher eye color : $eye_color <br>";

// change the eye color
$t->set_eye_color("green");
$eye_color =  $t->get_eye_color();
echo "<br>→ New student eye color : $eye_color <br>";

// get age
// $t -> age; // will throw an error (private)
$age = $t->get_age();
echo "<br>→ Human (Teacher) age : $age <br>";

?>

