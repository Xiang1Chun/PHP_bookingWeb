<?php
require 'conn.php';

$Ssn = "SELECT Ssn FROM customer WHERE Ssn = '$_POST[Ssn]'";
$result = mysqli_query($conn,$Ssn);
if (mysqli_num_rows($result)) {
    echo "<script> alert('此資料已註冊'); parent.location.href='signup.php' </script>";
    return;
}

$acc = "SELECT Account FROM customer WHERE Account = '$_POST[account]'";
$result = mysqli_query($conn,$acc);
if (mysqli_num_rows($result)) {
    echo "<script> alert('此帳號已使用'); parent.location.href='signup.php' </script>";
    return;
}
$sql = "INSERT INTO customer (Ssn,F_name,L_name,Gender,Phone,Account,Password)  
VALUES ('$_POST[Ssn]','$_POST[Fname]','$_POST[Lname]','$_POST[gender]','$_POST[phone]','$_POST[account]','$_POST[password]')";

mysqli_query($conn,$sql)or die ("無法新增".mysql_error());
echo "<script> alert('註冊成功'); parent.location.href='login.php' </script>";
?>