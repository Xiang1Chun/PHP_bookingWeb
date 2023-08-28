<?php
	session_start();
	require '../conn.php';
	$_SESSION['hotel'] = "桃園市中壢區中美路2段117號5樓";
	$_SESSION['room'] = "單人房";
	$sql = "SELECT Comment, C_Name FROM evaluation 
	WHERE Roomtype = '$_SESSION[room]' AND NOT Comment = '' AND H_name IN
	(SELECT H_name FROM hotel WHERE Address = '$_SESSION[hotel]')";
	$result = mysqli_query($conn,$sql);
    if(!$result) {
        echo("Error: ".mysqli_error($conn));
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>TAOYUAN1-單人房</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="../css-type/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../css-type/animate.css">

	<link rel="stylesheet" href="../css-type/owl.carousel.min.css">
	<link rel="stylesheet" href="../css-type/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css-type/magnific-popup.css">

	<link rel="stylesheet" href="../css-type/aos.css">

	<link rel="stylesheet" href="../css-type/ionicons.min.css">

	<link rel="stylesheet" href="../css-type/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../css-type/jquery.timepicker.css">


	<link rel="stylesheet" href="../css-type/flaticon.css">
	<link rel="stylesheet" href="../css-type/icomoon.css">
	<link rel="stylesheet" href="../css-type/style.css">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="../main.php">Hotel</a>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="../main.php" class="nav-link">Home</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap" style="background-image: url('../image/桃園-1/type1-桃園1(main).jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
					<div class="text">
						<h1 class="mb-4 bread">伊甸園精緻旅店</h1>
					</div>
				</div>
			</div>
		</div>
	</div>


	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-md-12 ftco-animate">
							<h2 class="mb-4">單人房</h2>
							<div class="single-slider owl-carousel">
								<div class="item">
									<div class="room-img"
										style="background-image: url('../image/桃園-1/type1-桃園1.jpg');"></div>
								</div>
								<div class="item">
									<div class="room-img"
										style="background-image: url('../image/桃園-1/type1-桃園1(1).jpg');"></div>
								</div>
								<div class="item">
									<div class="room-img"
										style="background-image: url('../image/桃園-1/type1-桃園1(2).jpg');"></div>
								</div>
							</div>
						</div>
						<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
							<div class="d-md-flex mt-5 mb-5">
								<ul class="list">
									<li><span>最多人數:</span> 1 Persons</li>
									<li><span>房間面積:</span> 15 m2</li>
								</ul>
								<ul class="list ml-md-5">
									<li><span>床型:</span> 1 張單人床</li>
								</ul>
							</div>
							<h2>Device</h2>
							<div class="content">
								<ul class="ament" id="amenities">
									<li>空調</li>
									<li>房內衛浴</li>
									<li>平面電視</li>
									<li>免費WiFi</li>
									<li>免費盥洗用品</li>
									<li>廁所</li>
									<li>浴缸或淋浴</li>
									<li>書桌</li>
									<li>清潔用品</li>
									<li>冰箱</li>
									<li>拖鞋</li>
									<li>電話</li>
									<li>茶／咖啡沖泡設備</li>
									<li>吹風機</li>
									<li>電熱水壺</li>
									<li>洗衣機</li>
									<li>烘衣機</li>
									<li>吊衣架</li>
								</ul>
							</div>
						</div>

						<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
							<form method="POST" action="../evaluation.php" style="margin-bottom: 15%;" target = "type1_U2">
								<h4 class="mb-4">評分</h4>
								<div class="row" style="margin-bottom: 5%;">
									<div class="col-md-6">
										<div class="form-check">
											<input type="radio" name="radio" value=5 class="form-check-input"
												id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate">
													<span>5
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
													</span>
												</p>
											</label>
										</div>
										<div class="form-check">
											<input type="radio" name="radio" value=4 class="form-check-input"
												id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate">
													<span>4
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-o"></i>
													</span>
												</p>
											</label>
										</div>
										<div class="form-check">
											<input type="radio" name="radio" value=3 class="form-check-input"
												id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate">
													<span>3
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-o"></i>
														<i class="icon-star-o"></i>
													</span>
												</p>
											</label>
										</div>
										<div class="form-check">
											<input type="radio" name="radio" value=2 class="form-check-input"
												id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate">
													<span>2
														<i class="icon-star"></i>
														<i class="icon-star"></i>
														<i class="icon-star-o"></i>
														<i class="icon-star-o"></i>
														<i class="icon-star-o"></i>
													</span>
												</p>
											</label>
										</div>
										<div class="form-check">
											<input type="radio" name="radio" value=1 class="form-check-input"
												id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate">
													<span>2
														<i class="icon-star"></i>
														<i class="icon-star-o"></i>
														<i class="icon-star-o"></i>
														<i class="icon-star-o"></i>
														<i class="icon-star-o"></i>
													</span>
												</p>
											</label>
										</div>
									</div>
								</div>
								<div class="card" style="margin-bottom: 1%;">
									<div class="card-header" style="height: 50px;">
										<h5>留言板</h5>
									</div>
									<div class="card-body">
										<textarea style="outline: none; border: white;" name="content" id="content"
											cols="85" rows="3" placeholder="content ...."></textarea>
									</div>
								</div>
								<input type="submit" value="送出" class="btn float-right"
									style="background-color: #FFC312;">
									<iframe name="type1_U2" style="display:none"></iframe>
							</form>
							<div class="card">
								<div class="card-header row" style="height: 50px;">
									<h6 class="col-4">留言人</h6>
									<h6 class="col-8">評論內容</h6>
								</div>
								<?php if (mysqli_num_rows($result) > 0) : ?>
								<?php while ($row = mysqli_fetch_assoc($result)) : ?>
								<div class="card-body row">
									<h6 class="col-4"><?php echo "$row[C_Name]" ?>
									</h6>
									<h6 class="col-8"><?php echo "$row[Comment]" ?></h6>
								</div>
								<?php endwhile ?>
								<?php endif ?>
							</div>
						</div>
						<div class="col-md-12 room-single ftco-animate mb-5 mt-5">
							<h4 class="mb-4">其他房型</h4>
							<div class="row">
								<div class="col-sm col-md-6 ftco-animate">
									<div class="room">
										<a href="../image/桃園-1/Ttype2-桃園1.jpg"
											class="img img-2 d-flex justify-content-center align-items-center"
											style="background-image: url(../image/桃園-1/type2-桃園1.jpg);">
											<div class="icon d-flex justify-content-center align-items-center">
												<span class="icon-search2"></span>
											</div>
										</a>
										<div class="text p-3 text-center">
											<h3 class="mb-3">雙人房</h3>
											<p><span class="price mr-2">$
													<?php $_SESSION['room'] = "雙人房";
													require '../price.php';
												?>
												</span> <span class="per"><?php echo "$_SESSION[day]"?> night</span></p>
											<hr>
											<p class="pt-1"><a href="type2-taoyuan-1.php"
													class="btn-custom">Room Detail <span
														class="icon-long-arrow-right"></span></a></p>
										</div>
									</div>
								</div>
								<div class="col-sm col-md-6 ftco-animate">
									<div class="room">
										<a href="../image/桃園-1/Ttype4-桃園1.jpg"
											class="img img-2 d-flex justify-content-center align-items-center"
											style="background-image: url(../image/桃園-1/type4-桃園1.jpg);">
											<div class="icon d-flex justify-content-center align-items-center">
												<span class="icon-search2"></span>
											</div>
										</a>
										<div class="text p-3 text-center">
											<h3 class="mb-3">四人房</h3>
											<p><span class="price mr-2">$
													<?php $_SESSION['room'] = "四人房";
													require '../price.php';
												?>
												</span> <span class="per"><?php echo "$_SESSION[day]"?> night</span></p>
											<hr>
											<p class="pt-1"><a href="type4-taoyuan-1.php"
													class="btn-custom">Room Detail<span
														class="icon-long-arrow-right"></span></a></p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- .col-md-8 -->
				<div class="col-lg-4 sidebar ftco-animate">
					<div class="sidebar-box">
					</div>
					<div class="sidebar-box ftco-animate">
						<div class="categories">
							<h3>Room Service</h3>
							<li></li>
							<li>清理房間</li>
							<li>洗衣(另外收費)</li>
							<li>Morning Call</li>
							<li>更換設備</li>
							<li></li>
							<li></li>
						</div>
						<span style="font-size:20px">$
							<?php
								$_SESSION['room'] = "單人房";
								require '../price.php';
							?>
						</span>
						<span class="per"><?php echo "$_SESSION[day]"?> night<br></span>
						<input type="button" value="預訂房間" name="booking" class="btn float-right login_btn"
							onclick="location.href='../booking.php'" style="background-color:  #f3c300;">
					</div>
				</div>
			</div>
		</div>
	</section> <!-- .section -->


	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Address</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">桃園市中壢區中美路2段117號5樓</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Phone</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-phone"></span><span class="text">03-4253 300</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Mail</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-envelope"></span><span
										class="text"></span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="../js-type/jquery.min.js"></script>
	<script src="../js-type/jquery-migrate-3.0.1.min.js"></script>
	<script src="../js-type/popper.min.js"></script>
	<script src="../js-type/bootstrap.min.js"></script>
	<script src="../js-type/jquery.easing.1.3.js"></script>
	<script src="../js-type/jquery.waypoints.min.js"></script>
	<script src="../js-type/jquery.stellar.min.js"></script>
	<script src="../js-type/owl.carousel.min.js"></script>
	<script src="../js-type/jquery.magnific-popup.min.js"></script>
	<script src="../js-type/aos.js"></script>
	<script src="../js-type/jquery.animateNumber.min.js"></script>
	<script src="../js-type/bootstrap-datepicker.js"></script>
	<script src="../js-type/jquery.timepicker.min.js"></script>
	<script src="../js-type/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="../js-type/google-map.js"></script>
	<script src="../js-type/main.js"></script>

</body>

</html>