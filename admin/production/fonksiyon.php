<?php

ob_start();
session_start();

/*

//lisanslama 

$ipadres=$_SERVER['REMOTE_ADDR'];

$site=$_SERVER["HTTP_HOST"];

$lisans="portofirma.com.tr" //alan adım.//lisans verdiğimiz sitenini adresi.buraya ne yazarsam o site lisanlı olucak.

$hata ="http://www.neyazilim.com";//kendi sitemizin linkini veririz.hataları sitemie atar.

if ($lisans!=$site) { ?>

	<center><b style="color: red;">Lisanssız Site</b></center><br>

	<center><b style="color: red;">İp Adresiniz<?php echo $ipadres; ?> tarafımızca kaydedilmiştir.</b></center>

	<hr>

<?php } 

//echo $sure=rand(4,10);

$sure=rand(4,10);

header("refresh:$sure;$hata?$ipadres=$ipadres&site=$site"); //lisansız giren alan adı kendı sıtemıze yönlendırdık ip aresi ile.

?>

<!--
else
{
	echo "Lisanslı Site";
}
//lisanslama
-->

*/


//FOOTERE KİLİTLEME DEĞİŞİKLĞİ ENGELLLEME

$footer="footer.php";

//echo $footerboyut=filesize($footer); // footerın boyutunu hesaplar.

$footerboyut=filesize($footer); // footerın boyutunu hesaplar.

if ($footerboyut!=4174) { ?> <!-- footerın boyutunu 4174.-->
	
	<center><b style="color: red;">Footer Değiştirilmiş</b></center><br>

	<hr>

<?php } 

//FOOTERE KİLİTLEME DEĞİŞİKLĞİ ENGELLLEME



function seo($s) {
	$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',' ',',','?');
	$eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','');
	$s = str_replace($tr,$eng,$s);
	$s = strtolower($s);
	$s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
	$s = preg_replace('/\s+/', '-', $s);
	$s = preg_replace('|-+|', '-', $s);
	$s = preg_replace('/#/', '', $s);
	$s = str_replace('.', '', $s);
	$s = trim($s, '-');
	return $s;
}



function tcevir($tarih) {
	$tr = explode("-", $tarih);
	$tarih1 = $tr[2]."-".$tr[1]."-".$tr[0];
	return $tarih1;
}


?>