<?php
$conn = new mysqli("localhost","root","zxc123456","database_hw");
mysqli_query($conn, "SET NAMES 'UTF8'");
if (!$conn)
{
    echo "連接錯誤";
}
?>