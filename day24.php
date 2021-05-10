<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 24 : PHP MySQL
// Day 24 | IG : https://www.instagram.com/benjivrik/
// Subject :  PHP - MySQL
// ----------------------------------------------------
// What would be the output of this program ?

// MySQL is a common database used with PHP and it uses the standard SQL
// The data in MySQL are stored in tables consisting of columns and rows
// a database is used for storing related information categorically
// more info : https://www.w3schools.com/php/php_mysql_intro.asp
// For this Q&A, we work with basic SQL TABLE and maintly using the 
// operations CREATE, INSERT, READ and DELETE 

// require('day20.php')

// supposing the database (PHPQA) already exists
// set parameters for your database
$servername = "localhost";
$dbname = "phpqa";  // database name
$username = "root";
$password = "";


try {
  // establish the databse connection
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // set the PDO error mode to exception
  // ERRMODE_EXECEPTION : https://stackoverflow.com/questions/49959415/what-does-setattributepdoattr-errmode-pdoerrmode-exception-do-more-exactl
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "<br><h5><b> Creating the 'users' table 
        if it does not already exist in the database 'phpqa'. </b></h5>";

  // create table if not exists
  $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname     VARCHAR(30) NOT NULL,
        lastname      VARCHAR(30) NOT NULL,
        profile_path  VARCHAR(200) NOT NULL,
        registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

  // execute your query with the function exec() | no return on exec()
  $conn->exec($sql);

  echo "<br><span>User table successfully created!</span><br>";

  echo "<br><h5><b> Adding the records in the table 'users'. </b></h5>";

  $firstname = $user1->getFirstName();
  $lastname  = $user1->getLastName();
  $profile_path = $user1->getProfilePath();
  
  $sql = "INSERT INTO users(firstname, lastname, profile_path)
          VALUES ('$firstname', '$lastname', '$profile_path')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<br><span>New record created successfully!</span><br>";

  echo "<br><h5><b> Reading a record from the database table 'users' using SELECT. </b></h5>";

  $sql_stmt = $conn->prepare("SELECT id, firstname, profile_path FROM users");
  $sql_stmt->execute();

  // get the resulting array as an associative array
  $result = $sql_stmt->setFetchMode(PDO::FETCH_ASSOC);
  $result = $sql_stmt->fetchAll();

  var_dump($result);

  echo "<br>";

  echo "<br><h5><b> Clearing all the records in the table users. </b></h5>";

  $sql = "DELETE FROM users";
  $conn->exec($sql);

  echo "<br><span>All the data have been successfully deleted from the table 'users'!</span><br>";


} catch(PDOException $e) {

  if(isset($sql_stmt)){
      var_dump($sql_stmt);
      echo "<br>" . $e->getMessage();
  }else{
      echo $sql . "<br>" . $e->getMessage();
  }

}

// close the connection
$conn = null;




?>