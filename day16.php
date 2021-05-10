<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 16 : 
// Day 16 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge V - Password Generator
// ----------------------------------------------------
//  what would be the output of this program ?


class PasswordGen{

    private $list_characters,$list_integers,$list_punctuations;
    private $password_length;
    private $num_letter,$num_punctuation, $num_integer;

    function __construct(int $num_letter, int $num_integer, int $num_punctuation)
    {
        echo "<br><span>Password generator object created!</span><br>";
        // get all the characters from 'a' to 'z'; and from 'A' to 'Z'
        $this->list_characters = array_merge(range('a','z'),range('A','Z'));
        // get all the integers
        $this->list_integers = array_merge(range(0,9));
        // initialize the symbols
        $this->list_punctuations = array_merge(
                            range('!','/'),
                            range(':','@'), 
                            range('[','`'),
                            range('{','~')
                        );
        
        // print_r($this->list_characters);
        // print_r($this->list_integers);
        // print_r($this->list_punctuations);

        // get the requirement from the user
        $this->num_letter      = $num_letter;
        $this->num_punctuation = $num_punctuation;
        $this->num_integer     = $num_integer;

        // initialize the password length
        $this->password_length = $this->num_letter + $this->num_punctuation + $this->num_integer;
    }

    function get_password() : string{
        $password = "";
        // add the the required number of letter
        for($i = 0; $i<$this->num_letter;$i++){
            $password .= $this->list_characters[rand(0,count($this->list_characters)-1)];
        }

        // add the the required number of integers
        for($i = 0; $i<$this->num_integer;$i++){
            $password .= $this->list_integers[rand(0,count($this->list_integers)-1)];
        }

        // add the the required number of punctuation
        for($i = 0; $i<$this->num_punctuation;$i++){
            $password .= $this->list_punctuations[rand(0,count($this->list_punctuations)-1)];
        }

        return str_shuffle($password);

    }

    // setters and getters (TO COMPLETE WHEN NEEDED)
    function set_password_length($new_password_length){
        $this->password_length = $new_password_length;
    }

    function get_num_letter(){
        return $this->num_letter;
    }
    function get_num_punctuation(){
        return $this->num_punctuation;
    }
    function get_num_integer(){
        return $this->num_integer;
    }
    function get_password_length(){
        return $this->password_length;
    }

}

$pGen = new PasswordGen(10,7,8);
echo "<br><h4> Generated Password Requirements</h4>";
echo "<br><span>Number of integers : ".$pGen->get_num_integer()."</span>";
echo "<br><span>Number of characters : ".$pGen->get_num_letter()."</span>";
echo "<br><span>Number of punctuation : ".$pGen->get_num_punctuation()."</span>";
echo "<br><span>Password length : ".$pGen->get_password_length()."</span>";
echo "<br><span>The generated password is : ".$pGen->get_password()."</span>";


?>