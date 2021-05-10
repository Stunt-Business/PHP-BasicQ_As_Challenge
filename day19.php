<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 19 : 
// Day 19 | IG : https://www.instagram.com/benjivrik/
// Subject :  Traits
// ----------------------------------------------------
//  what would be the output of this program ?

// a trait contains methods that can be used in multiple classes
trait Presentation{
    function introduce($name, $jobTitle){
        echo "<br><span>Hello, I am $name. My job is $jobTitle </span><br>";
    }
    function dream($dreamJob){
        echo "<br><span>Hey, I want to work as an/a $dreamJob </span><br>";
    }
}

// Student
class StudentT extends Human{

    private $student_id;
    private $year_level;

    use Presentation; // include the Presentation Trait
    
    // constructor
    function __construct($name, $age, $eye_color, $student_id, $year_level){
       Human::__construct($name,$age, $eye_color);
       $this->student_id = $student_id;
       $this->year_level = $year_level;
       echo "<br> Student Object {$name} created!<br>";
       // using the trait's functions here
       // you do not have to use them in the constructor
       $this->introduce($name, "Cashier");
       $this->dream("Engineer");
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


}

// Teacher
class TeacherT extends Human{

   private $teacher_id;
   private $teacher_class;

   use Presentation; // include the Presentation Trait
   // constructor
   function __construct($name, $age, $eye_color, $teacher_id, $teacher_class){
       Human::__construct($name,$age, $eye_color);
       $this->teacher_id    = $teacher_id;
       $this->teacher_class = $teacher_class;
       echo "<br> Teacher Object {$name} created! <br>";
       $this->introduce($name, "Teacher");
       $this->dream("Teacher");
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
}



echo "<br><h4> Creating the Student Object </h4>";
// Student Object
$s =  new StudentT("Stunt",25,"brown","20200305", 4);

// display the name
echo "<br>→ Student name : $s->name <br>";


echo "<br><h4> Creating the Teacher Object </h4>";
// Teacher Object
$t =  new TeacherT("Tech",50,"brown","20200306", "TECH2500");

// display the name
echo "<br>→ Teacher name : $t->name <br>";

?>