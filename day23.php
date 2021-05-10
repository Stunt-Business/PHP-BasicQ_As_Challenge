<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 23 : Challenge IX - File Manager
// Day 23 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge IX - File Manager
// ----------------------------------------------------
//  what would be the output of this program ?

class FileManager{

    private $folder_path;
    private $filename;
    private $complete_path;

    function __construct($folder_path,$filename)
    {
        $this->folder_path = $folder_path;

        // create the folder if it does not already exist
        if (!file_exists($this->folder_path)) {
            mkdir($this->folder_path, 0777, true);
        }

        $this->filename = $filename;
        $this->complete_path = $this->folder_path."/".$this->filename;

        // initialize an empty file
        fclose( fopen($this->complete_path, "a+") );
    }

    // append content in the file
    function add_content_in_file($data){
        $file = fopen($this->complete_path, "a+") or die("Unable to open file!");
        fwrite($file, $data);
        fclose($file);
    }

    // show the content of the file
    function show_content(){

        $file = fopen($this->complete_path, "r");

        //read file line by line until the EOF is reached
        while(!feof($file)) {
            $line = fgets($file);
            echo $line. "<br>";
        }

        fclose($file);
    }

    // clear your file
    function clear_file(){
        fclose(fopen($this->complete_path, 'w' ));
        echo "<br><span>File cleared!</span><br>";
    }

    // setters and getters (TO COMPLETE WHEN NEEDED)
    function set_filename($filename){
        $this->filename = $filename;

        // update path
        $this->complete_path = $this->folder_path."/".$this->filename;

        echo "<br><span>New filename successfully set to ".$this->filename."</span><br>";

    }

    function get_filename(){
        return $this->filename;
    }

    function get_complete_path(){
        return $this->complete_path;
    }

    function set_folder_path($folder_path){
        $this->folder_path = $folder_path;
        if (!file_exists($this->folder_path)) {
            mkdir($this->folder_path, 0777, true);
        }
        // update path
        $this->complete_path = $this->folder_path."/".$this->filename;

        echo "<br><span>New folder path successfully set to ".$this->folder_path."</span><br>";
    }

    function get_folder_path(){
        return $this->folder_path;
    }

    function __toString():string{
        $env =  "<br><span>Hello, your current folder is : ".$this->folder_path."</span><br>";
        $env .= "<br><span>And you are working with the file ".$this->filename."</span><br>";
        $env .= "<br><span>Your full path is : ".$this->complete_path."</span><br>";
        return $env;
    }
}

echo "<br><h5> <b> Displaying File Manager Information </b> </h5>";
$file_manager = new FileManager('text_data','day_23_data.txt');
echo $file_manager;
echo "<hr>";
echo "<br><h5> <b> Adding content  </b> </h5>";
$file_manager -> add_content_in_file("Day-23\nblah blah\n");
echo "<br><h5> <b> Displaying the File Content </b> </h5>";
$file_manager -> show_content();
$file_manager -> clear_file();

?>