<?php 
    session_start();
    ob_start();

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "thebakici";

    $link = mysqli_connect($server,$username,$password);
    $db = mysqli_select_db($link,"thebakici");

    mysqli_query($link,"set names utf8");
    
?>