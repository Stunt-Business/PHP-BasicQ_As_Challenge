<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 28 : Challenge XII - JPGraph - PHP (Bar plot)
// Day 28 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge XII - JPGraph - PHP (Bar plot)
// ----------------------------------------------------
//  what would be the output of this program ?

// Using the approach of the Challenge X, iniatize five items and their respective
// prices. Store the items information in the database table 'items' and read
// the prices from the same database table. 
// Plot the collected prices in Bar plot for comparison.

require_once('jpgraph-4.3.4/src/jpgraph.php');
require_once('jpgraph-4.3.4/src/jpgraph_bar.php');

// include('./day21.php'); 
// include('./day24.php');

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
  
    echo "<br><h5><b> Reading records 'item_price' 
                      from the database table 'items' using SELECT. </b></h5>";
  
    $sql_stmt = $conn->prepare("SELECT item_price
                                FROM items");
    $sql_stmt->execute();
  
    // get the resulting array as an associative array
    $result = $sql_stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $sql_stmt->fetchAll();


    // collect the prices 
    foreach($result as $i=>$data)
    {
        $prices[] = (float) $data['item_price'];
    }


    // reference : http://www.digialliance.com/docs/jpgraph/html/exframes/frame_example20.1.html
    $datay= $prices;

    // var_dump($prices);

    // Create the graph. These two calls are always required
    $graph = new Graph(400,300,"auto");    
    $graph->SetScale("textlin");

    // Add a drop shadow
    $graph->SetShadow();

    // Adjust the margin a bit to make more room for titles
    $graph->img->SetMargin(40,30,20,40);

    // Create a bar pot
    $bplot = new BarPlot($datay);
    $graph->Add($bplot);

    // Adjust fill color
    $bplot->SetFillColor('yellow');
    $bplot->value->Show();
    

    // Setup the titles
    $graph->title->Set("Bar graph for the Prices");
    $graph->xaxis->title->Set("X-axis");
    $graph->yaxis->title->Set("Prices");

    $graph->title->SetFont(FF_FONT1,FS_BOLD);
    $graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
    $graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);


    $path = "img_data/day28.jpg";

    if (file_exists($path)) {
        unlink($path);
    } // to avoid the error : JpGraph Error: 25111 Can't delete cached image

    // Display the graph
    $graph->Stroke($path);

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