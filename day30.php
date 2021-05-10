<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 30 : Challenge XIV - Data Processing - Read and Plot
// Day 30 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge XIV - Data Processing - Read and Plot
// ----------------------------------------------------
//  what would be the output of this program ?

// include('./day23.php');

require_once('jpgraph-4.3.4/src/jpgraph.php');
require_once('jpgraph-4.3.4/src/jpgraph_line.php');

//initialize the file manager
$fileManager = new FileManager('text_data','day_30_data.txt');

// add the required title
$title = "Angle\t\tSine\t\tCosine\n";
$fileManager->clear_file();
$fileManager->add_content_in_file($title);

// angles from 0 to 360 deg
// give a 15 deg span between your angles
for($i=0; $i <= 360; $i += 15){

    $sinus = sin(deg2rad($i));
    $cosinus = cos(deg2rad($i));

    $data = sprintf("%f\t\t%f\t\t%f\n",$i, $sinus,$cosinus);

    $fileManager -> add_content_in_file($data);
}

// uncomment the following file if you want to display the content of your file
// $fileManager ->show_content();
// read your data back
$file = fopen($fileManager->get_complete_path(), "r");

//read file line by line until the EOF is reached
while(!feof($file)) {
    $line = fgets($file);
    if(preg_match('/[a-zA-Z]*Angle[a-zA-Z]*/', $line)){ // skip the line
        continue;
    }else{
        // echo $line. "<br>";
    }

    $data = explode("\t\t",$line);
    // remove empty strings if necessary
    $data  = array_filter($data);

    // get the appropriate data
    // index 0 : angle - index 1 : sine - index 2 : cosine
    if(count($data) == 3){
        $__angles[] = (float) $data[0];
        $angles_sin[] = (float) $data[1];
        $angles_cos[] = (float) $data[2];
    }
    
}

// index
for($index = 0; $index < count($__angles); $index++){
    $__ticklabels[] = strval($__angles[$index]);
}

// var_dump($__ticklabels);

fclose($file);
 
// Create the graph. These two calls are always required
$graph = new Graph(800,400);
$graph->SetScale('textlin');
$graph->ygrid->Show();
$graph->xgrid->Show();

// Create the linear plot - sin(x)
$lineplot_sin =new LinePlot($angles_sin);
// Add the plot to the graph
$graph->Add($lineplot_sin);

$lineplot_sin->SetColor('red');
$lineplot_sin->SetLegend('sin(x)');

// Create the linear plot - cos(x)
$lineplot_cos =new LinePlot($angles_cos);
// Add the plot to the graph
$graph->Add($lineplot_cos);
$lineplot_cos->SetColor('green');
$lineplot_cos->SetLegend('cos(x)');

$path = "img_data/day30.jpg";

if (file_exists($path)) {
    unlink($path);
} // to avoid the error : JpGraph Error: 25111 Can't delete cached image

$x=0;
while ($x < count($angles)){
    $__tickposition[] = $x;
    $x++;
};

$graph->title->Set('Sinusoide - sin(x) - cos(x)');

// Title for X-axis
$graph->xaxis->title->Set('Angles (deg)');
$graph->xaxis->title->SetMargin(4);
//$graph->xaxis->title->SetFont(FF_ARIAL,FS_NORMAL,11);
$graph->xaxis->SetMajTickPositions($__tickposition, $__ticklabels);

// Title for Y-axis
$graph->yaxis->title->Set('Y-axis');
$graph->yaxis->title->SetMargin(4);
//$graph->yaxis->title->SetFont(FF_ARIAL,FS_NORMAL,11);

$graph->legend->SetFrameWeight(1);
$graph->legend->SetColumns(6);
$graph->legend->SetColor('black','gray');

 
// Display the graph
$graph->Stroke($path);

?>
