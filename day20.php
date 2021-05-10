<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 20 : Challenge VI - User
// Day 20 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge VI - User
// ----------------------------------------------------
//  what would be the output of this program ?
class User{

    private $firstname;
    private $lastname;
    private $profile_path;
    private $user_id; 
    static $IDs = 0;

    function __construct($firstname, $lastname, $profile_path="./outputs_util/stunt-business.png")
    {
        $this->firstname = $firstname;
        $this->lastname  = $lastname;
        $this->profile_path = $profile_path;
        ++self::$IDs;
        $this->user_id = self::$IDs;
    }

    // setters and getters (TO COMPLETE WHEN NEEDED)
    function getFirstName(){
        return $this->firstname;
    }

    function getLastName(){
        return $this->lastname;
    }

    function getProfilePath(){
        return $this->profile_path;
    }

    function getUserID(){
        return $this->user_id;
    }

    function setProfilePath($profile_path){
        $this->profile_path = $profile_path;
    }

    function __toString():string{

        echo "<br><h5> Displaying User Information </h5>";

        $user  = "<br> → First-Name : ".$this->firstname;
        $user .= "<br> → Last-Name : ".$this->lastname;
        $user .= "<br> → User ID : ".$this->user_id;

        return $user;
    }
}

$user1 = new User("Jivrik", "KAT");
$user2 = new User("Vrik", "VirK");
$user3 = new User("Kvrik", "Krik");

// echo $user2; // using __toString()

$users = array($user1,$user2,$user3);


?>