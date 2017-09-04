<?php
    session_start();

    session_destroy();

    unset($_SESSION['username']);

    unset($_SESSION['name']);

    header("location:login.php");

?>