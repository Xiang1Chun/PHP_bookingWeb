<?php
    session_start();
    require 'conn.php';
    $sql_r = "SELECT Count FROM room WHERE R_Address = '$_SESSION[hotel]' AND Roomtype = '$_SESSION[room]'";
    $result = mysqli_query($conn,$sql_r);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $row_r = mysqli_fetch_assoc($result);
    if ($row_r['Count'] < $_POST['count']) {
        echo "<script> alert('房間不足房間剩餘數量 : $row_r[Count]'); parent.location.href='booking.php'</script>";
        return;
    }
    
    $sql_r = "UPDATE room SET Count = $row_r[Count] - $_POST[count] WHERE R_Address = '$_SESSION[hotel]' AND Roomtype = '$_SESSION[room]'";
    $result = mysqli_query($conn,$sql_r);
    
    $sql_s = "SELECT In_date,Out_date FROM search  ORDER BY Ssn DESC LIMIT 1";
    $result = mysqli_query($conn,$sql_s);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $Pno = $_POST['adult'] + $_POST['child'];
    $row = mysqli_fetch_assoc($result);
    
    $sql_h = "SELECT DISTINCT H_name FROM hotel WHERE Address = '$_SESSION[hotel]'";
    $result = mysqli_query($conn,$sql_h);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $row_h = mysqli_fetch_assoc($result);
    $sql = "INSERT INTO form (F_name,L_name,In_date,Out_date,P_number,Count,Phone,H_name,Roomtype)  
            VALUES ('$_POST[Fname]','$_POST[Lname]','$row[In_date]','$row[Out_date]','$Pno','$_POST[count]',
            '$_POST[phone]','$row_h[H_name]','$_SESSION[room]')";
    mysqli_query($conn,$sql)or die ("無法新增".mysql_error());

    $sql_F = "SELECT No FROM form ORDER BY No DESC LIMIT 1";
    $result = mysqli_query($conn,$sql_F);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $row = mysqli_fetch_assoc($result);
    $sql = "INSERT INTO set_up (Fno, C_Ssn) VALUES ('$row[No]','$_SESSION[Ssn]')";
    mysqli_query($conn,$sql)or die ("無法新增".mysql_error());
    
    echo "<script> alert('訂單成功'); parent.location.href='form.php' </script>";
?>