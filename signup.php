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
            .ok {
                color: #008800;
            }

            input:valid+.ok {
                display: inline;
            }

            input:invalid+.ok {
                display: none;
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
                                <h3>Sign Up</h3>
                            </div>
                            <div class="card-body">
                                <form method = "POST" action = "account.php" target="IHide">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="Lname" placeholder="姓--Lname" required>
                                        <span class="input-group-text ok">ok</span>
                                        <input type="text" class="form-control" name="Fname" placeholder="名--Fname" required>
                                        <span class="input-group-text ok">ok</span>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id = "account" name="account" placeholder="帳號--account" required pattern="[0-9A-Za-z]{8,20}">
                                        <span class="input-group-text ok">ok</span>
                                        <script>
                                        var account = document.getElementById("account");
                                        account.onblur = function () {
                                            if (account.validity.patternMismatch) {
                                                account.setCustomValidity("帳號只能是英文、数字或_、@字元，長度8到15位");
                                            }
                                            else {
                                                account.setCustomValidity("");
                                            }
                                        };
                                    </script>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id = "password" name="password" placeholder="密碼--password" required pattern="[0-9A-Za-z]{10,15}">
                                        <span class="input-group-text ok">ok</span>
                                        <script>
                                        var password = document.getElementById("password");
                                        password.onblur = function () {
                                            if (password.validity.patternMismatch) {
                                                password.setCustomValidity("密碼只能是英文、数字，長度10到15位");
                                            }
                                            else {
                                                password.setCustomValidity("");
                                            }
                                        };
                                    </script>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id = "Ssn" name="Ssn" placeholder="身分證--Ssn" required pattern="[A-Z][0-9]{9}">
                                        <span class="input-group-text ok">ok</span>
                                        <script>
                                        var Ssn = document.getElementById("Ssn");
                                        Ssn.onblur = function () {
                                            if (Ssn.validity.patternMismatch) {
                                                Ssn.setCustomValidity("請符合身分證格式，開頭必須大寫");
                                            }
                                            else {
                                                Ssn.setCustomValidity("");
                                            }
                                        };
                                    </script>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                        </div>
                                        <select name="gender" required>
                                            <option value="0" disabled selected>性別--gender</option>
                                            <option value="男">男</option>
                                            <option value="女">女</option>
                                        </select>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id = "phone" name="phone" placeholder="電話--09xxxxx"
                                        required pattern="^09[0-9]{8}$">
                                        <span class="input-group-text ok">ok</span>
                                        <script>
                                        var phone = document.getElementById("phone");
                                        phone.onblur = function () {
                                            if (phone.validity.patternMismatch) {
                                                phone.setCustomValidity("請輸入正確的手機格式");
                                            }
                                            else {
                                                phone.setCustomValidity("");
                                            }
                                        };
                                    </script>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Signup" name="signup" class="btn float-right login_btn">
                                    </div>
                                    <iframe name="IHide" style="display:none"></iframe> 
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