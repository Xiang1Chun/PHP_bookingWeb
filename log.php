<?php
    session_start();
    require 'conn.php';
    $sql_a = "SELECT Account, F_name, L_name FROM customer WHERE Account = '$_POST[account]'";
    $result_a = mysqli_query($conn,$sql_a);
    $sql_p = "SELECT Account,Password, F_name, L_name, Ssn FROM customer WHERE Password = '$_POST[password]'";
    $result_p = mysqli_query($conn,$sql_p);
    if(!$result_a) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    if (!mysqli_num_rows($result_a)) {
	    echo "<script> alert('此帳號不存在'); parent.location.href='login.php' </script>";
    } else {
        $row_a = mysqli_fetch_assoc($result_a);
        $row_p = mysqli_fetch_assoc($result_p);
        if (!mysqli_num_rows($result_p) || $row_a['Account'] != $row_p['Account']) {
            echo "<script> alert('密碼錯誤'); parent.location.href='login.php' </script>";
        } else {
            $_SESSION['account'] = $_POST['account'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['Lname'] = $row_a['L_name'];
            $_SESSION['Fname'] = $row_a['F_name'];
            $_SESSION['Ssn'] = $row_p['Ssn'];
            echo "<script> alert('登入成功'); parent.location.href='main.php' </script>";
        }
    }
    mysqli_close($conn);
?>