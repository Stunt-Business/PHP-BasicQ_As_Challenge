<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 21 : Challenge VII - Item
// Day 21 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge VII - Item
// ----------------------------------------------------
//  what would be the output of this program ?
class Item{

    private $name;
    private $category;
    private $price;
    private $profile_path;

    function __construct(string $name, 
                         string $category, 
                         float $price,
                         $profile_path="./outputs_util/stunt-business.png")
    {
        $this->name     = $name;
        $this->category = $category;
        $this->price    = $price;
        $this->profile_path = $profile_path;
    }

    // setters and getters (TO COMPLETE WHEN NEEDED)
    function get_name(){
        return $this->name;
    }
    function get_price(){
        return $this->price;
    }
    function get_category(){
        return $this->category;
    }

    function getProfilePath(){
        return $this->profile_path;
    }

    function setProfilePath($profile_path){
        $this->profile_path = $profile_path;
    }

    function __toString():string{

        echo "<br><h5> Displaying Item Information </h5>";

        $item  = "<br> → Item name : ".$this->name."<br>";
        $item .= "<br> → Item category : ".$this->category."<br>";
        $item .= "<br> → Item price : ".$this->price."<br>";

        return $item;
    }

}

// items
$item1 = new Item("Banana", "Fruit", 2.5);
$item2 = new Item("Apple", "Fruit", 4);
$item3 = new Item("Carrot", "Vegetables", 10,  $profile_path="./outputs_util/day21_carrot.jpg");

// echo $user2; // using __toString()

$items = array($item1,$item2,$item3);

?>