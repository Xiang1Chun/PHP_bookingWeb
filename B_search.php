<?php
    session_start();
    require 'conn.php';
    $_SESSION['Ssn'] = $_POST['CSsn'];
    $sql_s = "SELECT * FROM form, set_up WHERE AND No = Fno AND C_Ssn = '$_SESSION[Ssn]'";
    $result_s = mysqli_query($conn,$sql_s);

    $sql_c = "SELECT * FROM form, cancel WHERE AND No = Fno AND C_Ssn = '$_SESSION[Ssn]'";
    $result_c = mysqli_query($conn,$sql_c);

    if (!mysqli_num_rows($result_s) && !mysqli_num_rows($result_c)) {
        echo "<script> alert('查無此資料'); parent.location.href='searchbooking.php' </script>";
    } else {
       header('Location:form.php');
    }
?>