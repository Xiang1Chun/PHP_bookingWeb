<?php
    require 'conn.php';
    session_start();
    $sql_s = "SELECT * FROM form, set_up WHERE No = Fno AND C_Ssn = '$_SESSION[Ssn]'";
    $result_s = mysqli_query($conn,$sql_s);
    if(!$result_s) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $sql_c = "SELECT * FROM form, cancel WHERE No = Fno AND C_Ssn = '$_SESSION[Ssn]'";
    $result_c = mysqli_query($conn,$sql_c);
    if(!$result_c) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" class="icon" href="image/icon.ico" type="image/ico">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>HB-Web</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Bootstrap/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="main.php"><img src="image/icon-1-removebg-preview.png" style="width: 15rem;" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="main.php">Home</a></li>  
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container-fluid">
					<div class="d-flex justify-content-center h-100">
                        <div class="card row-3" style="width: 1400px; margin-top: 170px; height: auto;">
                            <div class="card-header row" style="height: 50px;">
                                <h5 class="col">狀態</h5>
                                <h5 class="col">訂單編號</h5>
                                <h5 class="col">飯店</h5>
                                <h5 class="col">姓名</h5>
                                <h5 class="col">入住日期</h5>
                                <h5 class="col">退房日期</h5>
                                <h5 class="col">人數</h5>
                                <h5 class="col">房型</h5>
                                <h5 class="col">間數</h5>
                                <h5 class="col">電話</h5>
                                <h5 class="col"></h5>
                            </div>
                            <?php if (mysqli_num_rows($result_s) > 0) : ?>
                            <?php while ($row = mysqli_fetch_assoc($result_s)) : ?>
                            <div class="card-body row">                                
                                    <h5 class="col">訂單成功</h5>
                                    <h5 class="col"><?php echo "$row[No]" ?></h5>
                                    <h5 class="col"><?php echo "$row[H_name]" ?></h5>
                                    <h5 class="col"><?php echo "$row[L_name]"."$row[F_name]" ?></h5>
                                    <h5 class="col"><?php echo "$row[In_date]" ?></h5>
                                    <h5 class="col"><?php echo "$row[Out_date]" ?></h5>
                                    <h5 class="col"><?php echo "$row[P_number]" ?></h5>
                                    <h5 class="col"><?php echo "$row[Roomtype]" ?></h5>
                                    <h5 class="col"><?php echo "$row[Count]" ?></h5>
                                    <h5 class="col"><?php echo "$row[Phone]" ?></h5>  
                                    <h5 class="col"></h5>
                            </div>
                            <?php endwhile ?>
                            <?php endif ?>
                            <?php if (mysqli_num_rows($result_c) > 0) : ?>
                            <?php while ($row = mysqli_fetch_assoc($result_c)) : ?>
                            <div class="card-body row">
                                    <h5 class="col">已取消</h5>
                                    <h5 class="col"><?php echo "$row[No]" ?></h5>
                                    <h5 class="col"><?php echo "$row[H_name]" ?></h5>
                                    <h5 class="col"><?php echo "$row[L_name]"."$row[F_name]" ?></h5>
                                    <h5 class="col"><?php echo "$row[In_date]" ?></h5>
                                    <h5 class="col"><?php echo "$row[Out_date]" ?></h5>
                                    <h5 class="col"><?php echo "$row[P_number]" ?></h5>
                                    <h5 class="col"><?php echo "$row[Roomtype]" ?></h5>
                                    <h5 class="col"><?php echo "$row[Count]" ?></h5>
                                    <h5 class="col"><?php echo "$row[Phone]" ?></h5>
                                    <h5 class="col"></h5>
                            </div>
                            <?php endwhile ?>
                            <?php endif ?>
                            <?php if (!mysqli_num_rows($result_c) && !mysqli_num_rows($result_s)) : ?>
                                <div class="card-body row">
                                    <h5 class="col" align="center">無訂單資料</h5>
                            </div>
                            <?php else : ?>
                            <div class="form-group">
                                <input type="button" value="取消訂單" name="取消訂單" class="btn float-right login_btn" onclick="javascript:location.href='cancelbooking.php'">;
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
				</div>
            </div>
        </section>
        <!--================Banner Area =================-->
        

        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>