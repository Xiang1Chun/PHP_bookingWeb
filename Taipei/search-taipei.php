<?php
    session_start();
    require '../conn.php';
    $sql = "SELECT Roomtype FROM search ORDER BY Ssn DESC LIMIT 1";
    $result = mysqli_query($conn,$sql);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
    $row = mysqli_fetch_assoc($result);
	unset($_SESSION['hotel']);
	unset($_SESSION['room']);
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
        <link rel="stylesheet" href="../Bootstrap/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../login.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="../main.php"><img src="../image/icon-1-removebg-preview.png" style="width: 15rem;" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="../main.php">Home</a></li>  
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area bgg">
            <div class="booking_table d_flex align-items-center">
                <div class="overlay bg-parallax b" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 m-md-auto align-self-center ml-auto">
                            <div class="about-block">
                                <div class="about-item-1">
                                    <div class="content">
                                        <h5>...-... , ... , ... 
                                            <i class="fas fa-search fa-lg"></i>
                                        </h5>
                                    </div>
                                </div>
                                <!-- About 01 -->
                                <div class="about-item">
                                    <img src="../image/taipei-1/type1-taipei1(main).jpg" width="30%" height="30%" style="margin-right: 7%;">
                                    <div class="content">
                                        <h4>熊趣飯店</h4>
                                        <p>熊旅飯店落腳在三面環山、翠綠森林、溪河環繞的新北市三峽區。我們要讓旅客來此住宿，都能像回歸大自然森林中那樣怡然自得地休憩。
                                        本館風格為北歐工業風，跳脫以往對飯店的既定印象。距離便利商店步行1分鐘內抵達、距離公車站步行1分鐘內抵達、
                                        距離三峽老街（Sanxia Old Street）2 公里。 飯店周圍有各式各樣的用餐選擇。相較城市其他相似住宿，此間住宿物超所值！</p>
                                    </div>
                                    <div>
                                    <?php if ($row['Roomtype'] == "單人房") : ?>
                                        <input type="button" style="margin-top: 205%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type1-taipei-1.php'">
                                        <?php elseif ($row['Roomtype'] == "雙人房") : ?>
                                        <input type="button" style="margin-top: 205%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type2-taipei-1.php'">
                                        <?php else : ?>
                                        <input type="button" style="margin-top: 205%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type4-taipei-1.php'">
                                    <?php endif ?>
                                    </div>
                                </div>
                                <!-- About 02 -->
                                <div class="about-item">
                                    <img src="../image/taipei-2/type-taipei2(main).jpg" width="30%" height="30%" style="margin-right: 7%;">
                                    <div class="content">
                                        <h4>福格大飯店</h4>
                                        <p>福格大飯店四周由大屯山、觀音山及淡水河環繞，距離淡水老街及紅毛城有 10 分鐘步程。客人可於此享受按摩、打撞球或使用商務中心，也可以前往觀光旅遊櫃檯安排旅遊行程。
                                        館內餐飲包括戶外花園咖啡館、供應輕食的福格咖啡館或供應中式美食的粵式海鮮餐廳。
                                        飯店距離捷運淡水站有 5 分鐘步程、距離淡水渡船頭有 10 分鐘步程、距離漁人碼頭則有 5 分鐘渡輪航程、距離松山機場有 40 分鐘車程，距離台北車站及桃園國際機場則有 1 小時車程。</p>
                                    </div>
                                    <div>
                                        <?php if ($row['Roomtype'] == "單人房") : ?>
                                        <input type="button" style="margin-top: 225%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type1-taipei-2.php'">
                                        <?php elseif ($row['Roomtype'] == "雙人房") : ?>
                                        <input type="button" style="margin-top: 225%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type2-taipei-2.php'">
                                        <?php else : ?>
                                        <input type="button" style="margin-top: 225%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type4-taipei-2.php'">
                                        <?php endif ?>
                                    </div>
                                </div>
                                <input type="button" value="重新選擇" name="rechoose-Taipei-1" class="btn float-right login_btn" onclick="location.href='../main.php'">
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