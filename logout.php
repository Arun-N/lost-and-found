<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 15-10-2016
 * Time: 10:02 PM
 */
session_start();

if (isset($_SESSION['loggedin'])) {
    unset($_SESSION['username']);
    unset($_SESSION['loggedin']);
    //setcookie('loggedin', '');
    //setcookie('username', '');
    session_unset();
}
echo "<script>window.open('index.php','_self')</script>";
?>