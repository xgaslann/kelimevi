<?php
$sunucu = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "etiketler";

if ( @mysql_connect($sunucu,$kullanici,$sifre) == false ) {
	$mesaj = "<b>Hata</b> : Bağlantı başarısız. <br> <b>Hata Açıklaması</b> : ".mysql_error();
	die($mesaj);
}

if ( @mysql_select_db($veritabani) == false ) {
	$mesaj = "<b>Hata</b> : Veritabanı Seçilmedi <br> <b>Hata Açıklaması</b> : ".mysql_error();
	die($mesaj);
}

mysql_query("SET NAMES 'utf8'");

?>