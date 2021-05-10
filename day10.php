<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 10 : Form Validation
// Day 10 | IG : https://www.instagram.com/benjivrik/
// Subject :  Form Validation
// ----------------------------------------------------
// What would be the output of this program ?
// Using regEx, validate the form fields received from
// the webpage. 
// Make sure the entered name starts with an upper case letter [A-Z]
// and  ends with a number [0-9].  Between The first letter and last number
// you should expect 10 letters in upper case or lower case [a-zA-Z]
// Make sure the entered phone number start with XYZ and is followed by 10 numbers
// Make sure the entered email corresponds to the appropriate pattern of an email

$name = $_POST['name'];
$name = htmlspecialchars($name);
$phone_number  = $_POST['phone_number'];
$phone_number = htmlspecialchars($phone_number);
$email_address = $_POST['email'];
$email_address = htmlspecialchars($email_address);

// name validation requirement
echo "<br><h4>Name validation requirement</h4><br>";
echo "<span> Make sure the entered name start with an upper case letter [A-Z] </span><br>";
echo "<br><span> Between The first letter and last number, you should expect 10 letters in upper case or lower case [a-zA-Z] </span><br>";
echo "<br><span> Make sure the entered name  ends with a number [0-9] </span><br>";

// name validation
if (!preg_match("/^[A-Z][a-zA-Z]{10}[0-9]$/",$name)) {
     echo "<br> The name $name you entered does not match the above requirement <br>";
}else{
    echo "<br> The name $name you entered matches the above requirement <br>";
}

// phone number validation requirement
echo "<br><h4> Phone number validation requirement </h4><br>";
echo "<span> Make sure the entered phone number start with XYZ and is followed by 10 numbers </span><br>";

// phone number validation
if (!preg_match("/^XYZ[0-9]{10}$/",$phone_number)) {
    echo "<br> The phone number $phone_number you entered does not match the above requirement <br>";
}else{
   echo "<br> The phone number $phone_number you entered matches the above requirement <br>";
}

echo "<br><h4>Email validation</h4><br>";
echo "Using the PHP 
           <a href='https://www.w3schools.com/php/filter_validate_email.asp' 
           target='_new'> filter_var() with FILTER_VALIDATE_EMAIL </a>. <br>";

// For email validation, the PHP filter_var() function can be used 
if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
    echo "<br> The email address $email_address does not match the expected email pattern. <br>";
}else{
    echo "<br> The email address $email_address matches the expected email pattern. <br>";
}


?>