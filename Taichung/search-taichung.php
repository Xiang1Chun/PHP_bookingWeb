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
                                <img src="../image/台中-1/type1-台中1(main).jpg" width="30%" height="30%" style="margin-right: 7%;">
                                    <div class="content">
                                        <h4>我們有故事旅店</h4>
                                        <p>我們有故事旅店（逢甲館）位於西屯，距離台中足球場不到 1.8 公里，設有共用休息室、禁菸客房和免費 WiFi。旅館距離新光三越台中中港店 1.9 公里，距離台中市中心 1.9 公里。
                                            客房配有書桌、平面電視和私人衛浴。部分客房享有城市景觀，客房均配有熱水壺。客房提供冰箱。
                                            客人可使用商務中心，內附傳真機和複印機。
                                        </p>
                                    </div>
                                    <div>
                                    <?php if ($row['Roomtype'] == "單人房") : ?>
                                        <input type="button" style="margin-top: 205%;" value="查詢價格" name="price-Taichung-1" class="btn float-right login_btn price" onclick="location.href='type1-taichung-1.php'">
                                        <?php elseif ($row['Roomtype'] == "雙人房") : ?>
                                        <input type="button" style="margin-top: 205%;" value="查詢價格" name="price-Taichung-1" class="btn float-right login_btn price" onclick="location.href='type2-taichung-1.php'">
                                        <?php else : ?>
                                        <input type="button" style="margin-top: 205%;" value="查詢價格" name="price-Taichung-1" class="btn float-right login_btn price" onclick="location.href='type4-taichung-1.php'">
                                    <?php endif ?>
                                    </div>
                                </div>
                                <!-- About 02 -->
                                <div class="about-item">
                                <img src="../image/台中-2/type1-台中2(main).jpg" width="30%" height="30%" style="margin-right: 7%;">
                                    <div class="content">
                                        <h4>呆一中</h4>
                                        <p>呆一中提供免費 WiFi、快速辦理入住／退房服務和觀光旅遊櫃台。旅館距離逢甲夜市 7 公里，距離中華路夜市不到 1 公里，距離台中孔廟 1.8 公里，距離國立台灣美術館 2.5 公里。此旅館為抗過敏住宿。
                                        所有客房均設有空調、平面衛星電視、冰箱、水壺、淋浴、吹風機和桌子。客房配有衣櫃和私人衛浴。
                                        附近的熱門景點包括中正公園、台中公園和台中州廳。
                                        </p>
                                    </div>
                                    <div>
                                        <?php if ($row['Roomtype'] == "單人房") : ?>
                                        <input type="button" style="margin-top: 225%;" value="查詢價格" name="price-Taichung-2" class="btn float-right login_btn price" onclick="location.href='type1-taichung-2.php'">
                                        <?php elseif ($row['Roomtype'] == "雙人房") : ?>
                                        <input type="button" style="margin-top: 225%;" value="查詢價格" name="price-Taichung-2" class="btn float-right login_btn price" onclick="location.href='type2-taichung-2.php'">
                                        <?php else : ?>
                                        <input type="button" style="margin-top: 225%;" value="查詢價格" name="price-Taichung-2" class="btn float-right login_btn price" onclick="location.href='type4-taichung-2.php'">
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