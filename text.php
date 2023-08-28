<?php
$con = new mysqli("localhost","root","zxc123456","database_hw");
mysqli_query($con, "SET NAMES 'UTF8'");
if (!$con)
{
    echo "連接錯誤";
}
$sql = "SELECT * FROM customer WHERE Account = '$_POST[account]'";
$result = mysqli_query($con,$sql);
if(!$result) {
    echo("Error: ".mysqli_error($con));
    exit();
}
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
        echo "<td>id:".$row["Account"]."</td>";
        echo "<td>id:".$row["Password"]."</td>";
        echo "<td>id:".$row["Ssn"]."</td>";
        echo "</tr>";
        echo "<br>";
	}
} else {
	echo "<script> alert('此帳號不存在'); parent.location.href='login.php' </script>";
}
echo "</table>";
mysqli_close($con);
?>
