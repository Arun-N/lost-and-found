<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 16-10-2016
 * Time: 03:52 PM
 */

session_start();

$allow= array("jpg","jpeg","gif","png");//allowing specific file
$name=$_FILES['file']['name'];
$_SESSION['oname']=$name;

$seperate=explode(".",$_FILES['file']['name']); //separating base name and extention of file in an array

$extention=strtolower($seperate[1]);

if(in_array($extention,$allow))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "something wrong: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        $newname= round(microtime(true)).'.'.$extention;
        $_SESSION['nname']=$newname;
        echo $newname;

        move_uploaded_file($_FILES["file"]["tmp_name"],"objimg/".$newname);
        header('Location:upload.php');
    }
}

else
{
    echo "INVALID FILE";
}

