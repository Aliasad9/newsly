<?php
//login_success.php
session_start();
if (isset($_SESSION["email"])) {
    include_once("../functions/utils.php");
    echo '<h3>Login Success, Welcome - ' . $_SESSION["email"] . '</h3>';
    echo '<br /><br /><a href="./logout.php">Logout</a>';
} else {
    header("location:./admin_login.php");
}
?>