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
$strtags=strtolower($_POST['tags']);
$tag=explode(',',$strtags);//converting string to array
$tag[]=strtolower($obj_name);
$tags=serialize($tag);

$img_url=$_SESSION['nname'];

$date=date_create('',timezone_open("Asia/Kolkata"));
$d=serialize($date);


$q = mysqli_query($conn, "INSERT INTO `object` VALUES ('','$obj_name','$tags','$uid','$img_url','$d','true')");
if ($q) {


    $qq= mysqli_query($conn, "SELECT * FROM `object` WHERE `img_url`= '$img_url'");
    if($qq) {
        $row = mysqli_fetch_assoc($qq);
        $obj_id = $row['obj_id'];
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("something went wrong while retrieving");';
        //echo "window.open('upload.php','_self');";
        echo '</script>';
    }
    unset($_SESSION['nname']);
    unset($_SESSION['oname']);

    //adding Questions
    $count=$_SESSION['Qcount'];
    for($i=1;$i<=$count;$i++)
    {
        $que=$_POST['ques_'.$i].'?';
        $opt=array();
        for($j=1;$j<=4;$j++)
        {
            $opt[]= $_POST['opt'.$i.$j];
        }
        $options=serialize($opt);
        $a=$_POST['correct_ans_q'.$i];
        $answer=$_POST['opt'.$i.$a];

        $quer= "INSERT INTO `question` VALUES ('','$obj_id','$que','$answer','$options')";
        $quer1=mysqli_query($conn,$quer);
        if ($quer1){}
        else{
            echo '<script language="javascript">';
            echo 'alert("something wrong while adding questions");';
            echo "window.open('upload.php','_self');";
            echo '</script>';
        }
    }
    echo '<script language="javascript">';
    echo 'alert("object Successfully Added");';
    echo "window.open('lostORfound.php','_self');";
    echo '</script>';


}else{
    echo '<script language="javascript">';
    echo 'alert("Something Went Wrong while adding object!")';
    echo '</script>';
    //header('Location:upload.php');
}


