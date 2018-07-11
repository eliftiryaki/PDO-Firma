<meta charset="utf8">

<?php

try 
{
	$db = new pdo("mysql:host=localhost;dbname=pdofirma; charset=utf8" , 'root' , '');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOException $e)
{
	echo $e -> getMessage();

}

?>