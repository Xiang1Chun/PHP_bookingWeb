<?php
    session_start();
    session_destroy();
    require 'conn.php';
    $sql = "DELETE FROM search";
    $result = mysqli_query($conn,$sql);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    header("location:main.php");
?>