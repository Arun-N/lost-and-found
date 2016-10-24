<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 24-10-2016
 * Time: 04:16 PM
 */
session_start();

$count=$_SESSION['Qcount'];
for ($i=1;$i<=$count;$i++)
{
    echo $_POST['ques_'.$i];
    echo "<br>";
    $opt=array();
    for($j=1;$j<=4;$j++)
    {
        $opt[]= $_POST['opt'.$i.$j];
    }
    echo "<br>";
    var_dump($opt);
    echo "<br>";
    $a=$_POST['correct_ans_q'.$i];

    $answer=$_POST['opt'.$i.$a];
    echo $answer;
    echo "<br>";echo "<br>";echo "<br>";




}

echo $_POST['obj_name'];

echo "<br>";
$d2=date_create();
//$d1=date_create();
var_dump($d2);
$s=serialize($d2);

$ss=unserialize($s);
echo "<br>";echo "<br>";

var_dump($ss);
//$d=date_diff($d1,$d2);


//$dif=$d->format();
//echo $dif;


//echo $d1.'  '.$d2.'  '.$d;

//var_dump($d1);
//echo "<br>";echo "<br>";
//var_dump($d2);