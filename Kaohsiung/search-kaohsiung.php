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
                                    <img src="../image/高雄-1/type1-高雄1(main).jpg" width="30%" height="30%" style="margin-right: 7%;">
                                    <div class="content">
                                        <h4>家和商旅</h4>
                                        <p>
                                        家和商旅距離高雄車站僅 6 分鐘步行路程，設有典雅的客房和供應西式和當地美食的自助餐廳，全館提供免費 WiFi。
                                        每間客房均設有空調、衣櫃、熨衣設備、安全保險箱、平面有線電視、電熱水壺和冰箱。私人衛浴配有淋浴設備、免費盥洗用品和吹風機。部分客房設有浴缸。
                                        </p>
                                    </div>
                                    <div>
                                    <?php if ($row['Roomtype'] == "單人房") : ?>
                                        <input type="button" style="margin-top: 190%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type1-kaohsiung-1.php'">
                                        <?php elseif ($row['Roomtype'] == "雙人房") : ?>
                                        <input type="button" style="margin-top: 190%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type2-kaohsiung-1.php'">
                                        <?php else : ?>
                                        <input type="button" style="margin-top: 190%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type4-kaohsiung-1.php'">
                                    <?php endif ?>
                                    </div>
                                </div>
                                <!-- About 02 -->
                                <div class="about-item">
                                    <img src="../image/高雄-2/type1-高雄2(main).jpg" width="30%" height="30%" style="margin-right: 7%;">
                                    <div class="content">
                                        <h4>康橋商旅</h4>
                                        <p>
                                        康橋商旅位於高雄市中心，交通便利，距離光榮碼頭、自強夜市和熱門景點愛河步行僅 5 分鐘。旅館提供免費自行車出租服務，公共區域均設有免費 WiFi。
                                        客房設有空調、暖色調照明、木地板、平面有線電視、電熱水壺、冰箱和休息區。私人衛浴內附冷／熱水淋浴設施、吹風機和免費盥洗用品。部分客房享有海港景緻。
                                        旅館附設餐廳，每日供應美味的中式及西式自助式早餐。此外，旅館附近亦設有各式當地小吃攤、速食店和咖啡館，步行幾分鐘即可到達
                                        </p>
                                    </div>
                                    <div>
                                        <?php if ($row['Roomtype'] == "單人房") : ?>
                                        <input type="button" style="margin-top: 240%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type1-kaohsiung-2.php'">
                                        <?php elseif ($row['Roomtype'] == "雙人房") : ?>
                                        <input type="button" style="margin-top: 240%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type2-kaohsiung-2.php'">
                                        <?php else : ?>
                                        <input type="button" style="margin-top: 240%;" value="查詢價格" name="price-Taipei-2" class="btn float-right login_btn price" onclick="location.href='type4-kaohsiung-2.php'">
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