<?php
    require 'conn.php';
    session_start();
    $sql = "SELECT In_date,Out_date FROM search ORDER BY Ssn DESC LIMIT 1";
    $result = mysqli_query($conn,$sql);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $row = mysqli_fetch_assoc($result);
    
    $sql_h = "SELECT DISTINCT H_name FROM hotel WHERE Address = '$_SESSION[hotel]'";
    $result = mysqli_query($conn,$sql_h);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $row_h = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/icon.ico" type="image/ico">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>HB-Web</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Bootstrap/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <style>
            option:first-of-type {
                color: gray;
            }
        </style>
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
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="d-flex justify-content-center h-100">
                        <div class="card signup">
                            <div class="card-header">
                                <h3>訂單內容</h3>
                            </div>
                            <div class="card-body">
                            <form method = "POST" action = "book.php" target="Hide">
                                    <div class="input-group form-group">
                                        <label style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">飯店: </label>
                                        <div style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">
                                        <?php echo "$row_h[H_name]"; ?>
                                        </div>
                                    </div>

                                    <div class="input-group form-group">
                                        <label style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">房型: </label>
                                        <div style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">
                                        <?php echo "$_SESSION[room]"; ?>
                                        </div>
                                    </div>

                                    <div class="input-group form-group">
                                        <label style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">姓名: </label>
                                        <input type="text" class="form-control" name="Lname" placeholder="姓--Lname">
                                        <input type="text" class="form-control" name="Fname" placeholder="名--Fname">
                                        </div>
                                    <div class="input-group form-group">
                                        <label style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">間數: </label>
                                        <select name="count" size="1">
                                            <option value="0" disabled selected>房間數量</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                    <div class="input-group form-group">
                                        <label style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">入住日期: </label>
                                        <div style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">
                                            <?php echo "$row[In_date]";?>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <label style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">退房日期: </label>
                                        <div style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">
                                            <?php echo "$row[Out_date]"; ?> 
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <label style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">人數: </label>
                                        <input type="text" class="form-control" name="adult" placeholder="成人">
                                        <input type="text" class="form-control" name="child" placeholder="小孩">
                                    </div>
                                    <div class="input-group form-group">
                                        <label style="margin: 0.4rem 1rem 0rem 0.5rem; font-size: 1rem;">電話: </label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="電話" required pattern="^09[0-9]{8}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="送出資料" name="booking" class="btn float-right login_btn" >
                                    </div>
                                    <iframe name="Hide" style="display:none"></iframe> 
                                </form>
                            </div>
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