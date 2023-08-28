<?php
    require 'conn.php';
    $sql = "SELECT Total FROM room WHERE R_Address = '$_SESSION[hotel]' AND Roomtype = '$_SESSION[room]'";
    $result = mysqli_query($conn,$sql);
    if (!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $row = mysqli_fetch_assoc($result);
    echo "$row[Total]";
?>