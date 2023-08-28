<?php
    require 'conn.php';

    $sql = "INSERT INTO cancel (C_Ssn, Fno) VALUES ('$_POST[CSsn]','$_POST[F_No]')";
    mysqli_query($conn,$sql)or die ("無法新增".mysql_error());

    $sql_s = "DELETE FROM set_up WHERE C_Ssn = '$_POST[CSsn]' AND Fno = '$_POST[F_No]'";
    mysqli_query($conn,$sql_s)or die ("無法刪除".mysql_error());

    $sql_f = "SELECT Roomtype, Count FROM form WHERE NO = '$_POST[F_No]'";
    $result = mysqli_query($conn,$sql_f);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $row_f = mysqli_fetch_assoc($result);

    $sql_r = "UPDATE room SET Count = Count + $row_f[Count] WHERE Roomtype = '$row_f[Roomtype]' AND R_Address IN
    (SELECT Address FROM hotel WHERE H_name IN(SELECT H_name FROM form WHERE No = $_POST[F_No]))";
    $result = mysqli_query($conn,$sql_r);
    header('Location:form.php');
?>