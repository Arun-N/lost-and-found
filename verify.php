<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 17-10-2016
 * Time: 05:57 AM
 */
require_once ('config.php');
session_start();

$a1=$_SESSION['a1'];
$a2=$_SESSION['a2'];
$hol=$_SESSION['oid'];
//echo $_SESSION['oid'];


$A1=strtolower($_POST['answer1']);
$A2=strtolower($_POST['answer2']);

if($A1==$a1)
{
    if($A2==$a2)
    {
        echo "<script>window.open('objectFound.php','_self')</script>";
        $q= mysqli_query($conn,"SELECT * FROM `user` WHERE `uid`='$hol'");
        $row=mysqli_fetch_assoc($q);
        $_SESSION['name']=$row['u_name'];
        $_SESSION['emid']=$row['email_id'];
        $_SESSION['mob']=$row['mob_no'];

    }
    else
    {
        echo "<script>alert('SORRY! this is not your thing')</script>";
    }

}
