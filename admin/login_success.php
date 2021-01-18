<?php
//login_success.php
session_start();
include_once ('../inc/header.php');
if (isset($_SESSION["email"])) {

    echo '<h3>Login Success, Welcome - ' . $_SESSION["email"] . '</h3>';
    echo '<br /><br /><a href="./logout.php">Logout</a>';

} else {

    header("location:./admin_login.php");
}
?>