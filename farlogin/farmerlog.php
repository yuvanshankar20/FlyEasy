<?php
    $username = $_GET['tableuser'];
    $password = $_GET['pass'];

    if ($username == "Devrev" && $password == "admin@123") {
        header("Location:../admin/adminhome.php");
    } else {
        header("Location:../admin/adminhome.php");
    }
?>