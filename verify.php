<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 17-10-2016
 * Time: 05:57 AM
 */
require_once ('config.php');
session_start();


$hol=$_SESSION['oid'];
$coid=$_SESSION['currentO'];
$ans=$_SESSION['answers'];
$count=$_SESSION['qcount'];
//echo $_SESSION['oid'];
$flag=0;
for($i=1;$i<=$count;$i++)
{
    if($ans[$i-1]!= $_POST['radio_answer'.$i])
    {
        //echo "<script>alert('SORRY! this is not your thing')</script>";
        echo $_POST['radio_answer'.$i];
        $flag=1;
    }
}



if($flag==0)
{
    echo "<script>window.open('objectFound.php','_self')</script>";
    $q= mysqli_query($conn,"SELECT * FROM `user` WHERE `uid`='$hol'");
    $qq=mysqli_query($conn,"UPDATE `object` SET `status`='true' WHERE `obj_id`='$coid'");
    $row=mysqli_fetch_assoc($q);
    $_SESSION['name']=$row['u_name'];
    $_SESSION['emid']=$row['email_id'];
    $_SESSION['mob']=$row['mob_no'];

}
else
{
    echo "<script>alert('SORRY! this is not your thing')</script>";
    echo "<script>window.open('lostORfound.php','_self')</script>";

}