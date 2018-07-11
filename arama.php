<?php 

include 'header.php'; 

if(isset($_POST['aranan'])) {

  $aranan=$_POST['aranan']; 

} else {  

  $aranan=@$_GET['aranan'];
}

if(strlen($aranan)==0) 
{
    //echo "Arama yok...";
    header("Location:index.php");
    exit;
}



$sorgu=$db->prepare("SELECT * FROM icerik  where icerik_ad like ?");
$sorgu->execute(array("%$aranan%"));
$say=$sorgu->rowCount();

?>
<div role="main" class="main">
    <div class="container">
        <div class="row pt-xl">

            <div class="col-md-9">

                <h1 class="mt-xl mb-none">Sorgu Sonuçları</h1>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>

                <div class="row">

                    <?php 
                    if ($say==0) { ?>

                    <div class="col-md-7">
                        <p><b><?php echo $aranan ?></b> kelimesi ile ilgili sonuç bulunamadı...</p>
                    </div>
                    </div>
                    <?php }   ?>

                    <?php 

                    
         $sayfada = 4;//sayfada gösterilecek icerik miktarı

         

         $toplam_icerik = $sorgu->rowCount();

         $toplam_sayfa = ceil($toplam_icerik / $sayfada);

         //eger sayfa girilmemişse 1 varsayalım
         $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
         
         //eger 1 den kücük bir sayfa sayısı girilmemişse 1 yapalım
         if($sayfa < 1) $sayfa = 1;

         //toplam sayfa sayımızdan  fazla yazılırsa en son sayfayı varsayalım.
         if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;

         $limit = ($sayfa - 1) * $sayfada;

         $iceriksor=$db->prepare("select * from icerik  where icerik_ad LIKE ? order by icerik_zaman  DESC limit $limit,$sayfada");
         $iceriksor->execute(array("%$aranan%"));


        While($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>
        <!--BAŞLANGIÇ-->
        <!--hidden-xs mobilde div gizleme-->
         <div class="col-md-12">
            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
                <span class="thumb-info-side-image-wrapper p-none hidden-xs">
                <a title="" href="demo-law-firm-news-detail.html">
                <img width="200" height="200" src="<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive" alt="" style="width: 195px; padding:10px;">
                </a>
                </span>
                <span class="thumb-info-caption">
                <span>
                <h2 class="mb-md mt-xs"><a title="" class="text-dark" href="demo-law-firm-news-detail.html"><?php echo $icerikcek['icerik_ad']; ?></a></h2>
                <!--<span class="post-meta">
                <span>January 10, 2016 | <a href="#">John Doe</a></span>
                </span>-->
                <p style="font-size: 16px !important;"><?php echo substr($icerikcek['icerik_detay'],0,250); ?>...</p>
                <a class="mt-md" href="haber-<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>"> <p style="font-size: 15px; float: right; padding-left:10px;">Devamını Oku <i class="fa fa-long-arrow-right"></i></a></p>
                </span>
                </span>
                </span>
         </div>
         <!--BİTİŞ-->
        <?php } ?>

    </div>

</div>



<!--sidebar-->

<!--sidebar-->

</div>

</div>

<?php include 'footer.php'; ?>﻿