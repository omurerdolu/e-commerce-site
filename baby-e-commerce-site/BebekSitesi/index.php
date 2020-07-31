<?php 
include"Ust.php";
?>
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		<div class="hs-item set-bg" data-setbg="img/kızcocuksort.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-7 text-black-50">
						<span>YENİ ÜRÜNLER</span>
						<h2>BABYSHARK ERKEK ŞORT</h2>
						<p>YENİ SEZON ERKEK BEBEK ÜRÜMLERİNE GÖZ ATMADAN GEÇMEYİN  </p>
						<a href="#" class="site-btn sb-line"></a>
						<a href="#" class="site-btn sb-black-50">Çantana Ekle</a>
					</div>
				</div>
				<div class="offer-card text-black-50">
					<span>BAŞLAYAN FİYATLARLA</span>
					<h2>100 TL</h2>
					<p>ŞİMDİ AL</p>
				</div>
			</div>
		</div>
		<div class="hs-item set-bg" data-setbg="img/erkektakim.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-7 text-black-50">
						<span>YENİ ÜRÜNLER</span>
						<h2>BABYSHARK ERKEK TAKIM</h2>
						<p>YENİ SEZON ERKEK TAKIMLARINA GÖZ ATMADAN GEÇMEYİN </p>
						<a href="#" class="site-btn sb-line"></a>
						<a href="#" class="site-btn sb-black-50">ÇANTANA EKLE</a>
					</div>
				</div>
				<div class="offer-card text-black-50">
					<span>DEN BAŞLAYAN FİYATLARLA</span>
					<h2>80 TL</h2>
					<p>HEMEN AL</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="slide-num-holder" id="snh-1"></div>
	</div>
</section>

<section class="top-letest-product-section">
	<div class="container">
		<div class="section-title">
			<h2>Yeni Ürünler</h2>
		</div>
		<div class="product-slider owl-carousel">
			<?php 
			$Urunler=$db->query("SELECT * FROM urun ORDER BY urun_id DESC LIMIT 5");

			while($Urun=$Urunler->fetch())
				UrunListeGorunumu($Urun);
			?>
		</div>
	</div>
</section>

<section class="product-filter-section">
	<div class="container">
		<div class="section-title">
			<h2>Öne Çıkan Ürünler</h2>
		</div>
		<div class="row">
			<?php 
			$Urunler=$db->query("SELECT * FROM urun WHERE urun_vitrin=1 ORDER BY RAND() LIMIT 8");

			while($Urun=$Urunler->fetch())
			{
				?>
				<div class="col-lg-3 col-sm-6">
					<?php UrunListeGorunumu($Urun) ?>
				</div>
				<?php 
			}
			?>
		</div>
		<div class="text-center pt-5">
			<button class="site-btn sb-line sb-dark">DAHA FAZLA GÖRÜNTÜLE</button>
		</div>
	</div>
</section>

<section class="banner-section">
	<div class="container">
		<div class="banner set-bg" data-setbg="img/babyshark.jpg">
			<div class="tag-new">BABYSHARK TÜRKİYENİN 1 NUMARALI BEBEK GİYİM MAĞAZASI</div>
			<a href="#" class="site-btn">ALIŞVERİŞE BAŞLAf</a>
		</div>
	</div>
</section>


<?php 
include"Alt.php";

?>