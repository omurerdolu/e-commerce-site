<?php
try {
	$db = new PDO("mysql:host=localhost;dbname=omurerdolu;charset=utf8", "root", "");
	//echo "Başarılı";
} catch ( PDOException $e ) {
	print $e->getMessage();
}

$Ayar = $db->query("SELECT * FROM ayar")->fetch();
//echo"<pre>";
//print_r($Ayar);
//echo"</pre>";
?>