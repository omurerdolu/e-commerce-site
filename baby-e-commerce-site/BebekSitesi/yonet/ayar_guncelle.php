<?php 
include"../baglan.php";


if(isset($_POST['ayar_baslik']))
{
	$guncelle=$db->prepare("UPDATE ayar SET
		ayar_baslik=:ayar_baslik,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_instagram=:ayar_instagram,
		ayar_youtube=:ayar_youtube,
		ayar_msunucu=:ayar_msunucu,
		ayar_mport=:ayar_mport,
		ayar_mkadi=:ayar_mkadi,
		ayar_msifre=:ayar_msifre
		WHERE ayar_id=1");

	$Durum=$guncelle->execute(
		array(
			'ayar_baslik'=>$_POST['ayar_baslik'],
			'ayar_description'=>$_POST['ayar_description'],
			'ayar_keywords'=>$_POST['ayar_keywords'],
			'ayar_facebook'=>$_POST['ayar_facebook'],
			'ayar_twitter'=>$_POST['ayar_twitter'],
			'ayar_instagram'=>$_POST['ayar_instagram'],
			'ayar_youtube'=>$_POST['ayar_youtube'],
			'ayar_msunucu'=>$_POST['ayar_msunucu'],
			'ayar_mport'=>$_POST['ayar_mport'],
			'ayar_mkadi'=>$_POST['ayar_mkadi'],
			'ayar_msifre'=>$_POST['ayar_msifre']
		)
	);

	//print_r($guncelle->errorInfo());
	header("Location:ayar.php?Durum=$Durum");
}

?>