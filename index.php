<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />


<?php 

include 'header.php';
include 'slider.php';

$hakkimizdasor = $db->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);


 ?>

<section class="section section-default section-no-border mt-none">
	<div class="container">
		<div class="row mb-xl">
							<div class="col-md-7">
								<h2 class="mt-xl mb-none"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h2>
								<div class="divider divider-primary divider-small mb-xl">
								
								<hr>
								
								</div>
								<p class="mt-lg"><?php echo substr($hakkimizdacek['hakkimizda_icerik'],0,350); ?></p>

								<a class="mt-md" href="demo-law-firm-about-us.html">Devamını Oku<i class="fa fa-long-arrow-right"></i></a>
							</div>


							<?php

							$sayi=rand(1,10);

							if($sayi > 5 )

 							{ ?>

							<div class="col-md-4 col-md-offset-1">
								<h4 class="mt-xl mb-none">Vizyonumuz</h4>
								<div class="divider divider-primary divider-small mb-xl">
								<hr><div>
								<p class="mt-lg"><?php echo mb_substr($hakkimizdacek['hakkimizda_vizyon'],0,400,'utf-8'); ?></p>
							</div>

							<?php } else { ?>

							    <div class="col-md-4 col-md-offset-1">
								<h4 class="mt-xl mb-none">Misyonumuz</h4>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>
								<p class="mt-lg"><?php echo mb_substr($hakkimizdacek['hakkimizda_misyon'],0,400,'utf-8'); ?></p>
							</div>

							<?php } ?>



				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<h2 class="mt-xl mb-none">Son Haberler</h2>
							<div class="divider divider-primary divider-small divider-small-center mb-xl">
								<hr>
							</div>
						</div>
					</div>


                    <div class="row mt-xl">
					<?php
					$iceriksor=$db->prepare("SELECT * from icerik order by icerik_zaman DESC limit 2");
                    $iceriksor->execute();
                    while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>

					<div class="col-md-6">
					<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
					<span class="thumb-info-side-image-wrapper p-none hidden-xs">
					<a title="" href="#">
					<img width="200" height="200" src="<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive" alt="" style="width: 195px; padding:10px;">
					</a>
					</span>
					<span class="thumb-info-caption">
					<span>
					<h2 class="mb-md mt-xs"><a title="" class="text-dark"><?php echo $icerikcek['icerik_ad']; ?></a></h2>
					<!--<span class="post-meta">
					<span>January 10, 2016 | <a href="#">John Doe</a></span>
					</span>-->
					<p><?php echo substr($icerikcek['icerik_detay'],0,250); ?>...
					<a class="mt-md" href="haber-<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>"> Devamını Oku <i class="fa fa-long-arrow-right"></i></a>
					</span>
					</span>
					</span>
					</div>
               
					<?php } ?>
					</div>
</section>

<?php include 'footer.php'; ?>



