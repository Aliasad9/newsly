<?php
//login_success.php
session_start();
include_once ('../inc/header.php');
if (isset($_SESSION["email"])) {

header('location: ./news_dashboard_1.php');

} else {

    header("location:./admin_login.php");
}
?>