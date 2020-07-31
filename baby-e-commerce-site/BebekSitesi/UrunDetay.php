<?php 
include"Ust.php";

$Urun=$db->prepare("SELECT * FROM urun WHERE urun_id=?");
$Urun->execute(array(intval($_GET['id'])));

if($Urun->rowCount()==1)
{
	$Urun=$Urun->fetch();
	$db->query("UPDATE urun SET urun_gosterilme=(urun_gosterilme+1) WHERE urun_id=".$Urun['urun_id']);
}
else
{
	header("Location:./");
	exit;
}


?>

<div class="page-top-info">
	<div class="container">
		<h4>Kategoriler</h4>
		<div class="site-pagination">
			<a href="">ERKEK ÇOCUK</a> /
			<a href="">TSHİRT</a>
		</div>
	</div>
</div>

<section class="product-section">
	<div class="container">
		<div class="back-link">
			<a href="./category.html"> &lt;&lt; GERİ DÖN</a>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="product-pic-zoom">
					<img class="product-big-img" src="img/KızCocukKazak.jpg" alt="">
				</div>
				<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
					<div class="product-thumbs-track">
						<div class="pt active" data-imgbigurl="img/single-product/1.jpg"><img src="img/KızCocukKazak.jpg" alt=""></div>
						<div class="pt" data-imgbigurl="img/single-product/2.jpg"><img src="img/KızCocukKazak.jpg" alt=""></div>
						<div class="pt" data-imgbigurl="img/single-product/3.jpg"><img src="img/KızCocukKazak.jpg" alt=""></div>
						<div class="pt" data-imgbigurl="img/single-product/4.jpg"><img src="img/KızCocukKazak.jpg" alt=""></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 product-details">
				<h2 class="p-title"><?php echo $Urun['urun_adi'] ?></h2>
				<h3 class="p-price"><?php echo number_format($Urun['urun_fiyat'],2,",",".")." TL" ?></h3>
				<h4 class="p-stock">UYGUN: <span>ÜRÜN DURUMU</span></h4>
				<div class="p-rating">
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o fa-fade"></i>
				</div>
				<div class="p-review">
					<a href="">3 YENİ YORUM</a>|<a href="">YORUM EKLE</a>
				</div>
				<div class="fw-size-choose">
					<p>BEDEN</p>
					<div class="sc-item">
						<input type="radio" name="sc" id="xs-size">
						<label for="xs-size">32</label>
					</div>
					<div class="sc-item">
						<input type="radio" name="sc" id="s-size">
						<label for="s-size">34</label>
					</div>
					<div class="sc-item">
						<input type="radio" name="sc" id="m-size" checked="">
						<label for="m-size">36</label>
					</div>
					<div class="sc-item">
						<input type="radio" name="sc" id="l-size">
						<label for="l-size">38</label>
					</div>
					<div class="sc-item disable">
						<input type="radio" name="sc" id="xl-size" disabled>
						<label for="xl-size">40</label>
					</div>
					<div class="sc-item">
						<input type="radio" name="sc" id="xxl-size">
						<label for="xxl-size">42</label>
					</div>
				</div>
				<div class="quantity">
					<p>ADET</p>
					<div class="pro-qty"><input type="text" value="1"></div>
				</div>
				<a href="#" class="site-btn">HEMEN AL</a>
				<div id="accordion" class="accordion-area">
					<div class="panel">
						<div class="panel-header" id="headingOne">
							<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Ürün Açıklaması</button>
						</div>
						<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="panel-body">
								<?php echo $Urun['urun_aciklama'] ?>
							</div>
						</div>
					</div>
				</div>
				<div class="social-sharing">
					<a href=""><i class="fa fa-google-plus"></i></a>
					<a href=""><i class="fa fa-pinterest"></i></a>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="footer-section">
	<div class="container">
		<div class="footer-logo text-center">
			<a href="index.html"><img src="./img/logo-light.png" alt=""></a>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
					<h2>Web Sitesi Final Ödevidir</h2>
					<p>BU SİTE MEHMET ÖMÜR ERDOLU TARAFINDAN HAZIRLANMIŞ BİR FİNAL PROJESİ ÖDEVİDİR.</p>
					<img src="img/cards.png" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
					<h2>HAFTANIN EN İYİSİ</h2>
					<div class="fw-latest-post-widget">
						<div class="lp-item">
							<div class="lp-thumb set-bg" data-setbg="img/KızCocukAyakkabi.jpg"></div>
							<div class="lp-content">
								<h6>BU HAFTA EN ÇOK SATILAN ÜRÜN</h6>
								<span>15 HAZİRAN 2020</span>
								<a href="#" class="readmore">DAHA FAZLASINI GÖRÜNTÜLE</a>
							</div>
						</div>
						<div class="lp-item">
							<div class="lp-thumb set-bg" data-setbg="img/KızCocukElbise.jpg"></div>
							<div class="lp-content">
								<h6>BU YILIN EN ÇOK SATILAN ÜRÜNÜ</h6>
								<span>15 HAZİRAN 2020</span>
								<a href="#" class="readmore">DAHA FAZLASINI GÖRÜNTÜLE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget contact-widget">
					<h2>Questions</h2>
					<div class="con-info">
						
						
					</div>
					<div class="con-info">
						
						<p>SELÇUK ÜNİVERSİTESİ </p>
					</div>
					<div class="con-info">
						
						<p>+90 545 600 3849</p>
					</div>
					<div class="con-info">
						<span>E.</span>
						<p>oerdolu@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="social-links-warp">
		<div class="container">
			<div class="social-links">
				<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
				<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
				<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
				<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
				<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
				<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
				<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
			</div>

	

		</div>
	</div>
</section>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
