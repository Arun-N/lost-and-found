<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 17-10-2016
 * Time: 06:27 AM
 */
session_start();
var_dump($_SESSION['answers']);
echo "<br>";echo "<br>";

echo $_SESSION['ostatus'];
echo "<br>";echo "<br>";

$dif=$_SESSION['difdate'];
$d=$dif->format("%a days");
echo $d;
echo "<br>";echo "<br>";
$co= $_SESSION['qcount'];

for($i=1;$i<=$co;$i++)
{
    echo $_POST['radio_answer'.$i];
    echo "<br>";
}


var_dump($_SESSION['d']);
echo "<br>";
var_dump($_SESSION['d1']);





