<?php 

function UrunListeGorunumu($Urun)
{
	?>
	<div class="product-item">
		<a href="UrunDetay.php?id=<?php echo $Urun['urun_id'] ?>">
			<div class="pi-pic">
			<img src="./img/product/cocukkotjpg.jpg" alt="">
		
				<div class="pi-links">
					<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Sepete Ekle</span></a>
					<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
					
				</div>
			</div>
		
			<div class="pi-text">
				<h6><?php echo number_format($Urun['urun_fiyat'],2,",",".")." TL" ?></h6>
				<p><?php echo $Urun['urun_adi'] ?></p>
			</div>
		</a>
	</div>
	<?php 

}

?>