<?php 



$abortion= $_POST['val1'] ;
$blisters=$_POST['val2'] ;
$appetite=$_POST['val3'] ;
$milk=$_POST['val4'] ;
$lameness=$_POST['val5'] ;
$breathing=$_POST['val6'] ;
$temperature=$_POST['val7'] ;
$nascal=$_POST['val8'] ;

$line = array();
array_push($line, $temperature);
array_push($line, $breathing);
array_push($line, $lameness);
array_push($line, $milk);
array_push($line, $appetite);
array_push($line, $blisters);
array_push($line, $abortion);
array_push($line, $nascal);
$handle = fopen("featuresnew.csv", "a");
fputcsv($handle, $line);
fclose($handle);

$command = escapeshellcmd('Anthrax.py');
$output = shell_exec($command);
echo $output;

?>