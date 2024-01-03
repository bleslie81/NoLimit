<?php
    header('location:login.php');
    require_once('admin.php');
    unset($_SESSION['enter']);
    session_destroy();
    $con->db;
?>