<?php
    require 'conn.php';
    session_start();
    $sql = "SELECT L_name, F_name FROM customer WHERE Ssn = '$_SESSION[Ssn]'";
    $result = mysqli_query($conn,$sql);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $row_c = mysqli_fetch_assoc($result);

    $sql = "SELECT DISTINCT H_name FROM hotel WHERE Address = '$_SESSION[hotel]'";
    $result = mysqli_query($conn,$sql);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $row_h = mysqli_fetch_assoc($result);
    $name = "$row_c[L_name]$row_c[F_name]";

    $sql = "INSERT INTO evaluation (Ssn, Comment , C_Name, H_name ,Roomtype, Score) 
    VALUES ('$_SESSION[Ssn]', '$_POST[content]', '$name', '$row_h[H_name]', '$_SESSION[room]', '$_POST[radio]')";
    mysqli_query($conn,$sql)or die ("無法新增".mysqli_error());

    echo "<script> alert('留言成功'); parent.location.href='".$_SERVER["HTTP_REFERER"]."' </script>";
?>