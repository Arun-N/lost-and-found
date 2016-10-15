<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 15-10-2016
 * Time: 10:02 PM
 */

if (isset($_COOKIE['loggedin'])) {
    unset($_COOKIE['username']);
    unset($_COOKIE['loggedin']);
    setcookie('loggedin', '');
    setcookie('username', '');
}
echo "<script>window.open('index.php','_self')</script>";
?>