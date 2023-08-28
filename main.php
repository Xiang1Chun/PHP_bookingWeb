<?php
    session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/icon.ico" type="image/ico">
        <title>HB-web</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Bootstrap/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
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
                    <?php if (isset($_SESSION['account'])) : ?>
                        <div style="color: #fff; margin-left: 52%;"><?php echo "$_SESSION[Lname]$_SESSION[Fname] "?>你好</div>
                    <?php endif; ?>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="main.php">Home</a></li> 
                            <li class="nav-item submenu dropdown">
                            <?php if (!isset($_SESSION['account'])) : ?>
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">訂單</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="searchbooking.php">訂單查詢</a></li>
                                    <li class="nav-item"><a class="nav-link" href="cancel-booking.php">取消訂單</a></li>
                                </ul>
                            <?php endif ?>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">會員</a>
                                <?php if (isset($_SESSION['account'])) : ?>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="form.php">訂單查詢</a></li>
                                        <li class="nav-item"><a class="nav-link" href="logout.php">登出</a></li>
                                    </ul>
                                    <?php else : ?>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="login.php">登入</a></li>
                                    <li class="nav-item"><a class="nav-link" href="signup.php">註冊</a></li>
                                </ul>
                                <?php endif; ?>
                            </li> 
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
					<div class="banner_content text-center">
						<h6>Go Away from your boring life</h6>
						<h2>Relax And Travel</h2>
						<p>If you are confused about which hotel to choose, then you can refer to <br> our web, maybe we can solve your troubles</p>
						<a href="#" class="btn theme_btn button_hover">Get Started</a>
					</div>
				</div>
            </div>
            <div class="hotel_booking_area position">
                <div class="container">
                <form method = "POST" action = "search.php" target="main">
                    <div class="hotel_booking_table">
                        <div class="col-md-3">
                            <h2>Book<br> Your Room</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <div class="input-group date" id="start">
                                                    <input type="text" name = "indate" class="form-control" placeholder="入住日期--Start Date" required/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group date" id="end">
                                                    <input type="text" name = "outdate" class="form-control" placeholder="退房日期--End Date" required/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="input-group">
                                                <select class="wide" name = "p_num">
                                                    <option data-display="人數">人數-Total Number</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="3">4</option>
                                                    <option value="3">5</option>
                                                    <option value="3">6</option>
                                                    <option value="3">7</option>
                                                    <option value="3">8</option>
                                                    <option value="3">9</option>
                                                    <option value="3">10</option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <select class="wide" name = "roomtype">
                                                    <option data-display="房型">房型-Room Type</option>
                                                    <option value="單人房">單人房(1-Room)</option>
                                                    <option value="雙人房">雙人房(2-Room)</option>
                                                    <option value="四人房">四人房(4-Room)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="travel">
                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    </span>
                                                    <input list = "searchlist" name = "search" id="search" class="form-control" placeholder="你要去哪裡?" required/>
                                                    <datalist id="searchlist">
                                                        <option value="新北市"><option value="台北市">
                                                        <option value="桃園市"><option value="台中市">
                                                        <option value="台南市"><option value="高雄市">
                                                    </datalist>
                                                </div>
                                            </div>
                                                <input type="submit" value="Book Now" name="Book now" class="book_now_btn button_hover ">    
                                            </div>
                                            <?php if (!isset($_SESSION['account'])) : ?>
                                                <iframe name="main" style="display:none"></iframe>
                                            <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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