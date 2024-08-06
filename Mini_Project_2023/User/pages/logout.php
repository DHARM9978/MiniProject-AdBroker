<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location:/Mini_Project_2023/User/pages/home.php");
?>