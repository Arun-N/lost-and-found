<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 16-10-2016
 * Time: 03:56 PM
 */
include 'config.php';
session_start();

$uid=$_SESSION['uid'];
$obj_name=$_POST['obj_name'];
$strtags=$_POST['tags'];
$tag=explode(',',$strtags);//converting string to array
$tags=serialize($tag);

$img_url=$_SESSION['nname'];

$q1=$_POST['q1'].'?';
$a1=strtolower($_POST['a1']);
$q2=$_POST['q2'].'?';
$a2=strtolower($_POST['a2']);


$q = mysqli_query($conn, "INSERT INTO `object` VALUES ('','$obj_name','$tags','$uid','$img_url')");
if ($q) {


    $qq= mysqli_query($conn, "SELECT * FROM `object` WHERE `img_url`= '$img_url'");
    if($qq) {
        $row = mysqli_fetch_assoc($qq);
        $obj_id = $row['obj_id'];
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("something went wrong while retrieving");';
        echo "window.open('upload.php','_self');";
        echo '</script>';
    }
    unset($_SESSION['nname']);
    unset($_SESSION['oname']);

    $q1 = mysqli_query($conn, "INSERT INTO `question` VALUES ('','$obj_id','$q1','$a1')");
    $q2 = mysqli_query($conn, "INSERT INTO `question` VALUES ('','$obj_id','$q2','$a2')");
    echo '<script language="javascript">';
    echo 'alert("object Successfully Added");';
    echo "window.open('lostORfound.php','_self');";
    echo '</script>';


}else{
    echo '<script language="javascript">';
    echo 'alert("Something Went Wrong!")';
    echo '</script>';
    header('Location:upload.php');
}


