<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 11 : File Handling
// Day 11 | IG : https://www.instagram.com/benjivrik/
// Subject :  File Handling
// ----------------------------------------------------
//  what would be the output of this program ?

// Read, Write, Open, Create

// reading using the function readfile(path)
echo "<br><h4>Reading using the function readfile(path)</h4><br>";
echo readfile('text_data/day11_data.txt');

// Open your a file
// r : for reading your file
// w : for writing inside your file
// a : for appending a new content. This mode will create a file if it does not exist
// x : creates a file for writing and return FALSE if the corresponding file already exists

echo "<br><br><h4>Reading and writing using the function 
    fread(path, numBytes) and fwrite(file,txt) </h4><br>";
// attempt to open the file
$path = "text_data/day11_data.txt";
$file = fopen($path, "a+") or die("Unable to open file!");

$initial_content =  readfile('text_data/day11_data.txt');
//
echo $initial_content;

// append a new content "\nStunt Business\n"
$to_add = "\n> Stunt Business (Added) \n";
// 
fwrite($file, $to_add);

fclose($file);

echo "<br><br><h4>Reading using the function 
readfile(path) after adding the text </h4><br>";
// read the file again
echo readfile('text_data/day11_data.txt');



?>