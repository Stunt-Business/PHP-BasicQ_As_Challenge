<?php
// ---------------------------------------------------
// Author    :  Benjamin Kataliko Viranga
// Community :  Stunt Business
// Community website : www.stuntbusiness.com
// 
// 30 Days - Q&A PHP Basic
// Day 29 :  Challenge XIII - Sinusoide
// Day 29 | IG : https://www.instagram.com/benjivrik/
// Subject :  Challenge XIII - Sinusoide
// ----------------------------------------------------
//  what would be the output of this program ?
// plot a sinusoide using the function sin() from 0 to 360 deg.
// Modify the basic program from day27.php
// give a span of 15 deg to your data

require_once('jpgraph-4.3.4/src/jpgraph.php');
require_once('jpgraph-4.3.4/src/jpgraph_line.php');

// angles from 0 to 360 deg
// give a 15 deg span between your angles
for($i=0; $i <= 360; $i += 15){
    $angles[] = sin(deg2rad($i));
    $ticklabels[] = strval($i);
}
 
// Create the graph. These two calls are always required
$graph = new Graph(800,400);
$graph->SetScale('textlin');
$graph->ygrid->Show();
$graph->xgrid->Show();

// Create the linear plot
$lineplot=new LinePlot($angles);
// Add the plot to the graph
$graph->Add($lineplot);

$lineplot->SetColor('red');

$path = "img_data/day29.jpg";

if (file_exists($path)) {
    unlink($path);
} // to avoid the error : JpGraph Error: 25111 Can't delete cached image

// ref : https://stackoverflow.com/questions/19941158/jpgraph-show-all-text-ticks-on-x-axe
$x=0;
while ($x < count($angles)){
    $tickposition[] = $x;
    $x++;
};

$graph->title->Set('Sinusoide - sin(x)');

// Title for X-axis
$graph->xaxis->title->Set('Angles (deg)');
$graph->xaxis->title->SetMargin(4);
$graph->xaxis->title->SetFont(FF_ARIAL,FS_NORMAL,11);
$graph->xaxis->SetMajTickPositions($tickposition, $ticklabels);

// Title for Y-axis
$graph->yaxis->title->Set('Y-axis');
$graph->yaxis->title->SetMargin(4);
$graph->yaxis->title->SetFont(FF_ARIAL,FS_NORMAL,11);

 
// Display the graph
$graph->Stroke($path);
?>