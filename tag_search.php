<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 17-10-2016
 * Time: 01:15 AM
 */
include 'config.php';
session_start();
$strtag=$_POST['search_box'];
$_SESSION['searchB']=$strtag;

$Atag=explode(' ',$strtag);//converting string to an array

$q= mysqli_query($conn,"SELECT * FROM `object`");
$id=array();

while($row = mysqli_fetch_array($q))
{
    $a= unserialize($row['tags']);

    foreach ($Atag as $t)
    {
        if(in_array($t,$a))
        {
           $id[]=$row['obj_id'];
        }
    }

}
$result=array_unique($id);
var_dump($result);

$_SESSION['result']=$result;
header('Location:search.php');