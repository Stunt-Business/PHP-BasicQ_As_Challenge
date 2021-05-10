<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 26 : Challenge XI - UPDATE and  ORDER BY
// Day 26 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge XI - UPDATE and  ORDER BY
// ----------------------------------------------------
//  what would be the output of this program ?

// include('./day21.php'); 
// include('./day24.php');

// Utility
function table($keys, $result){
    // table <thead></thead>
    $thead = "<thead><tr>";
    foreach($keys as $key){
        $thead .= "<th> $key </th>";
    }
    $thead .= "</tr></thead>";


    // iterate
    // table <tbody></tbody>
    $tbody = "<tbody>";
    foreach($result as $row => $data){
        $tbody .= "<tr>";
        foreach($data as $column => $value){
            $tbody .= "<td> $data[$column] </td>";
        }
        $tbody .= "</tr>";
    }
    $tbody .= "</tbody>";

    echo "<table class='table table-striped'> $thead $tbody </table>";
}


// creating your objects
$item1 = new Item("Banana", "Fruit", 2.5);
$item2 = new Item("Apple", "Fruit", 4);
$item3 = new Item("Carrot", "Vegetables", 10,  $profile_path="./outputs_util/day21_carrot.jpg");
$item4 = new Item("Mango", "Fruit", 12);
$item5 = new Item("Green onion", "Vegetables", 13);


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
  
    echo "<br><h5><b> Creating the table 'items'
          if it does not already exist in the database 'phpqa'. </b></h5>";
  
    // create table if not exists
    $sql = "CREATE TABLE IF NOT EXISTS items (
          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          item_name     VARCHAR(30) NOT NULL,
          item_price     VARCHAR(30) NOT NULL,
          item_category  VARCHAR(30) NOT NULL,
          profile_path  VARCHAR(200) NOT NULL,
          registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";
  
    // execute your query with the function exec() | no return on exec()
    $conn->exec($sql);
  
    echo "<br><span>User table successfully created!</span><br>";
  
    echo "<br><h5><b> Adding the records in the table 'items'. </b></h5>";

    $stmt = $conn->prepare("INSERT INTO items (item_name, item_price, item_category, profile_path)
                            VALUES (:item_name, :item_price, :item_category, :profile_path)");
    $stmt->bindParam(':item_name',  $item_name);
    $stmt->bindParam(':item_price', $item_price);
    $stmt->bindParam(':item_category',$item_category);
    $stmt->bindParam(':profile_path', $profile_path);
  

    // insert a row - item 1
    $item_name  = $item1->get_name();
    $item_price = $item1->get_price();
    $item_category = $item1->get_category();
    $profile_path  = $item1->getProfilePath();
    $stmt->execute();

    // insert a row - item 2
    $item_name  = $item2->get_name();
    $item_price = $item2->get_price();
    $item_category = $item2->get_category();
    $profile_path  = $item2->getProfilePath();
    $stmt->execute();

    // insert a row - item 3
    $item_name  = $item3->get_name();
    $item_price = $item3->get_price();
    $item_category = $item3->get_category();
    $profile_path  = $item3->getProfilePath();
    $stmt->execute();

    // insert a row - item 4
    $item_name  = $item4->get_name();
    $item_price = $item4->get_price();
    $item_category = $item4->get_category();
    $profile_path  = $item4->getProfilePath();
    $stmt->execute();

    // insert a row - item 5
    $item_name  = $item5->get_name();
    $item_price = $item5->get_price();
    $item_category = $item5->get_category();
    $profile_path  = $item5->getProfilePath();
    $stmt->execute();
    

    echo "<br><span>New records created successfully!</span><br>";
  
    echo "<br><h5><b> Reading records from the database table 'items' using SELECT 
          and ordering the result by the item_name. </b></h5>";
  
    $sql_stmt = $conn->prepare("SELECT id, item_name, item_price, item_category, profile_path 
                                FROM items");
    $sql_stmt->execute();
  
    // get the resulting array as an associative array
    $result = $sql_stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $sql_stmt->fetchAll();
  
    // var_dump($result);
    // get the columns names
    // not the optimal way to do it
    if(count($result) > 0){
        // print_r(array_keys($result[0]));
        $keys = array_keys($result[0]);
    }

    // display the result of the table
    table($keys, $result);


    echo "<br><h5><b> Updating the second and fourth item prices
                     from the database table 'items' using SELECT. </b></h5>";

    $sql = "UPDATE items SET item_price= :item_price WHERE item_name= :item_name";
     // Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':item_name',  $item_name);
    $stmt->bindParam(':item_price', $item_new_price);

    // insert a row - item 2
    $item_name  = $item2->get_name();
    $item_new_price = 125;
    $stmt->execute();

    // display a message notifying the successful update
    echo "<br><span>".$stmt->rowCount() . " record(s) UPDATED successfully</span><br>";

    // insert a row - item 4
    $item_name  = $item4->get_name();
    $item_new_price = 85;
    $stmt->execute();

    // display a message notifying the successful update
    echo "<br><span>".$stmt->rowCount() . " record(s) UPDATED successfully</span><br><br>";

    $sql_stmt = $conn->prepare("SELECT id, item_name, item_price, item_category, profile_path 
                                FROM items ORDER BY item_name");
    $sql_stmt->execute();
  
    // get the resulting array as an associative array
    $result = $sql_stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $sql_stmt->fetchAll();

    // display the result of the table
    table($keys, $result);

    echo "<br><h5><b> Clearing all the records in the table items. </b></h5>";
  
    $sql = "DROP TABLE items";
    $conn->exec($sql);
  
    // echo "<br><span>All the data have been successfully deleted from the table 'items'!</span><br>";
    echo "<br><span>the table 'items' dropped!</span><br>";
  
  
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