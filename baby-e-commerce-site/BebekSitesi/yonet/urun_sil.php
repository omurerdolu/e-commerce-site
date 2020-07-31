<?php 
include"../baglan.php";

if(isset($_GET['id']))
{
	$Sil=$db->prepare("DELETE FROM urun WHERE urun_id=?");
	$Durum=$Sil->execute(array(intval($_GET['id'])));

	header("Location:UrunListele.php?Durum=".$Durum);
	exit;
}
?>