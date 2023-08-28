<?php
    session_start();
    require 'conn.php';

    if (!isset($_SESSION['account'])) {
        echo "<script> alert('請先登入'); parent.location.href='login.php' </script>";
    }

    $indate=strtotime(date("$_POST[indate]"));
    $outdate=strtotime(date("$_POST[outdate]"));
    $sql = "INSERT INTO search (Ssn, P_number, Roomtype, In_date, Out_date, Location)  
    VALUES ('$_SESSION[Ssn]','$_POST[p_num]','$_POST[roomtype]','$_POST[indate]','$_POST[outdate]','$_POST[search]')";
    mysqli_query($conn,$sql)or die ("無法新增".mysql_error());

    $day = round(($outdate - $indate)/60/60/24);
    $_SESSION['day'] = $day;
    $sql_p = "SELECT Price FROM room WHERE R_Address LIKE '$_POST[search]%'";
    $result = mysqli_query($conn,$sql_p);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    if (mysqli_num_rows($result) > 0) {
        if ($day > 3) {
            $day = $day * 0.6;
        } else if ($day > 12) {
            $day = $day * 0.4;
        }
        while ($row = mysqli_fetch_assoc($result)) {
            $sql_t = "UPDATE room SET Total = ($row[Price] * $day) 
            WHERE  R_Address LIKE '$_POST[search]%' AND Price = $row[Price]";
            $result_t = mysqli_query($conn,$sql_t);
            if(!$result_t) {
                echo("Error: ".mysqli_error($conn));
                exit();
            } 
        }
    }
   if ($_POST['search'] == '新北市') {
        header('Location:Taipei/search-taipei.php');
    } elseif ($_POST['search'] == '台北市') {
        header('Location:Taipei1/search-tapei1.php');
    } elseif ($_POST['search'] == '台中市') {
        header('Location:Taichung/search-taichung.php');
    } elseif ($_POST['search'] == '台南市') {
        header('Location:Tainan/search-tainan.php');
    } elseif ($_POST['search'] == '高雄市') {
        header('Location:Kaohsiung/search-kaohsiung.php');
    } elseif ($_POST['search'] == '桃園市') {
        header('Location:Taoyuan/search-taoyuan.php');
    } else {
        echo "<script> alert('查無此資料請重新輸入'); parent.location.href='main.php' </script>";
    }
?>