<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 27 : JPGraph - PHP (linear plot)
// Day 27 | IG : https://www.instagram.com/benjivrik/
// Subject :  JPGraph - PHP (linear plot)
// ----------------------------------------------------
//  what would be the output of this program ?
// https://jpgraph.net/doc/howto.php
// pChart is a PHP library that will help you to create anti-aliased charts 
// or pictures directly from your web server.
// PHP 5+


require_once('jpgraph-4.3.4/src/jpgraph.php');
require_once('jpgraph-4.3.4/src/jpgraph_line.php');
 
// Some data
$ydata_1 = array(11,3,8,12,5,10,9,13,5,7);
$ydata_2 = array(8,5,7,6,4,3,2,9,14,16);
$ydata_3 = array(12,15,17,16,14,3,2,8,14,6);
 
// Create the graph. These two calls are always required
$graph = new Graph(350,300);
$graph->SetScale('textlin');
 
// Create the linear plot
$lineplot_1=new LinePlot($ydata_1);
$lineplot_1->SetColor('blue');

$lineplot_2=new LinePlot($ydata_2);
$lineplot_2->SetColor('red');

$lineplot_3=new LinePlot($ydata_3);
$lineplot_3->SetColor('green');


$path = "img_data/day27.jpg";

if (file_exists($path)) {
    unlink($path);
} // to avoid the error : JpGraph Error: 25111 Can't delete cached image

// Add the plot to the graph
$graph->Add($lineplot_1);
$graph->Add($lineplot_2);
$graph->Add($lineplot_3);

$graph->title->Set('Day27 - Test');

// Title for X-axis
$graph->xaxis->title->Set('X-axis');
$graph->xaxis->title->SetMargin(1);
$graph->xaxis->title->SetFont(FF_ARIAL,FS_NORMAL,11);

// Title for Y-axis
$graph->yaxis->title->Set('Y-axis');
$graph->yaxis->title->SetMargin(1);
$graph->yaxis->title->SetFont(FF_ARIAL,FS_NORMAL,11);

 
// Display the graph
$graph->Stroke($path);

?>


