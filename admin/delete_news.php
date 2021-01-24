<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ./admin_login.php");
} else {
    if (isset($_GET['id'])){
        $news_id = $_GET['id'];
        include_once('../config/config.php');
        include_once('../functions/db_functions.php');
        $db_instance = new DBClass();
        $result = $db_instance->deleteNewsById($pdo, $news_id);
        echo "<script>history.back();</script>";
    }else{
        echo "<script>history.back();</script>";

    }
}
?>
