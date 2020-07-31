<?php 
include"baglan.php";
include"fonksiyon.php";
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php echo $Ayar['ayar_baslik'] ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="<?php echo $Ayar['ayar_description'] ?>">
	<meta name="keywords" content="<?php echo $Ayar['ayar_keywords'] ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./" class="site-logo">
							<img src="img/logoBabyShark.jpg" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="BabyShark Sitesinde ürün arayın">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<input type="button" value="Üye ol" onclick="admin.php">
								<a href="#">Giriş Yap</a> ya da <a href="#">Hesap Yarat </a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
										<i class="bags-shopping"></i>
									<span>0</span>
								</div>
								<a href="#">alışveriş sepeti</a>
							
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu"> 	
					<li><a href="#">KIZ BEBEK</a>
						<ul class="sub-menu">
							<li><a href="#">AYAKKABI</a></li>
							<li><a href="#"> TSHİRT</a></li>
							<li><a href="#">KIZ ÇOCUK ELBİSE</a></li>
							<li><a href="#">KIZ ÇOCUK ŞAPKA</a></li>
							<li><a href="#">ERKEK ÇOCUK ŞAPKA</a></li>
						</ul>
					</li>
					<li><a href="#">ERKEK BEBEK</a>
						<ul class="sub-menu">
							<li><a href="#">AYAKKABI</a></li>
							<li><a href="#">TSHİRT</a></li>
							<li><a href="#">PANTOLON</a></li>
							<li><a href="#">ŞAPKA</a></li>
							<li><a href="#">KAZAK</a></li>
						</ul>
					</li>
								<li>
									<a href="#">ERKEK ÇOCUK</a>
									<ul class="sub-menu">
										<li>
											<a href="#">AYAKKABI</a></li>
										<li>
											<a href="#">TSHİRT</a></li>
										<li>
											<a href="#">SWEETSHİRT</a></li>
										<li>
											<a href="#">KAZAK</a></li>
										<li>
											<a href="#">MONT</a></li>
									</ul>
								</li>
								<li>
									<a href="#">KIZ ÇOCUK</a>
									<ul class="sub-menu">
										<li>
											<a href="#">AYAKKABI</a></li>
										<li>
											<a href="#">TSHİRT</a></li>
										<li>
											<a href="#">SWEETSHİRT</a></li>
										<li>
											<a href="#">KAZAK</a></li>
										<li>
											<a href="#">MONT</a></li>
									</ul>
								</li>
								<li>
									<a href="#">KIZ AKSESUAR</a>
									<ul class="sub-menu">
										<li>
											<a href="#">SAAT</a></li>
										<li>
											<a href="#">BİLEKLİK</a></li>
										<li>
											<a href="#">KOLYE</a></li>
										<li>
											<a href="#">YÜZÜK</a></li>
										<li>
											<a href="#">ATKI</a></li>
									</ul>
								</li>
								<li>
									<a href="#">ERKEK AKSESUAR</a>
									<ul class="sub-menu">
										<li>
											<a href="#">SAAT</a></li>
										<li>
											<a href="#">BİLEKLİK</a></li>
										<li>
											<a href="#">KOLYE</a></li>
										<li>
											<a href="#">CÜZDAN</a></li>
										<li>
											<a href="#">ATKI</a></li>
									</ul>
								</li>
								
			
						<ul class="sub-menu">
							<li><a href="./product.html">Product Page</a></li>
							<li><a href="./category.html">Category Page</a></li>
							<li><a href="./cart.html">Cart Page</a></li>
							<li><a href="./checkout.html">Checkout Page</a></li>
							<li><a href="./contact.html">Contact Page</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->
