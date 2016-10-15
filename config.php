<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 15-10-2016
 * Time: 09:24 PM
 */

$conn= mysqli_connect('localhost','root','','lostfound');
if(!$conn)
{
    echo "Something went wrong with database";
    die();
}
?>