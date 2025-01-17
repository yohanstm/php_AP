<?php
include('application.php');


$mavar = new NomClass;

$res = 9;
$test = new NomClass;

echo $mavar -> getMonattribut() ;
echo $test -> setmonattribut($res);
?>