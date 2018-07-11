<?php

//localhe çalışmaz serverde çalışır.

//echo $_SERVER['REMOTE_ADDR']; //pc ip adresini alır.

echo $ip = $_SERVER['REMOTE_ADDR']; echo "<br>";//pc ip adresini alır.

//echo $ip = $_SERVER['SERVER_ADDR']; echo "<br>";//pc ip adresini alır.daha sağlıklı olur.

echo $site=$_SERVER['HTTP_HOST']; // siteninin alan adını alır.(portofirma.com.tr) gibi

echo $site=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URL'] // siteninin adres satırını komple alır.(portofirma.com.tr/test.php) gibi

?>
