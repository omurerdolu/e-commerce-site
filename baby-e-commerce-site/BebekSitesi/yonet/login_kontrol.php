<?php 
include"../baglan.php";

if(isset($_POST['kadi']) && isset($_POST['sifre']))
{
	if($_POST['kadi']!="" && $_POST['sifre']!="")
	{
		$kullanici=$db->prepare("
			SELECT kullanici_id,kullanici_mail,kullanici_adsoyad 
			FROM kullanici 
			WHERE kullanici_mail=? AND kullanici_sifre=? AND kullanici_yetki=1");

		$kullanici->execute(
			array(
				$_POST['kadi'],
				$_POST['sifre']
			)
		);

		if($kullanici->rowCount()==1)
		{
			$kullanici=$kullanici->fetch();

			$_SESSION['kullanici_id']=$kullanici['kullanici_id'];
			$_SESSION['kullanici_mail']=$kullanici['kullanici_mail'];
			$_SESSION['kullanici_adsoyad']=$kullanici['kullanici_adsoyad'];

			$db->query("UPDATE kullanici SET 
				kullanici_sifreunuttum='',
				kullanici_songiris=NOW()
				WHERE kullanici_id=".$kullanici['kullanici_id']);

			header("Location:./");
			exit;
		}
		else
		{
			$kullanici=$db->prepare("
				SELECT kullanici_id,kullanici_mail,kullanici_adsoyad 
				FROM kullanici 
				WHERE kullanici_mail=? AND kullanici_sifreunuttum=? AND kullanici_yetki=1");

			$kullanici->execute(
				array(
					$_POST['kadi'],
					$_POST['sifre']
				)
			);

			if($kullanici->rowCount()==1)
			{
				$kullanici=$kullanici->fetch();

				$_SESSION['kullanici_id']=$kullanici['kullanici_id'];
				$_SESSION['kullanici_mail']=$kullanici['kullanici_mail'];
				$_SESSION['kullanici_adsoyad']=$kullanici['kullanici_adsoyad'];

				$db->query("UPDATE kullanici SET 
					kullanici_sifre=kullanici_sifreunuttum, 
					kullanici_sifreunuttum='',
					kullanici_songiris=NOW()
					WHERE kullanici_id=".$kullanici['kullanici_id']);

				header("Location:./");
				exit;
			}
			else
			{
				header("Location:login.php?hata");
				exit();
			}
		}
	}
}

header("Location:login.php?hata");

?>