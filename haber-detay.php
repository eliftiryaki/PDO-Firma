<?php

 include 'header.php'; 

$iceriksor = $db -> prepare("SELECT * FROM icerik WHERE icerik_id=:icerik_id");
$iceriksor->execute(array(
'icerik_id' => @$_GET['icerik_id']
));

$icerikcek = $iceriksor -> fetch(PDO::FETCH_ASSOC);

?>

			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">

						<div class="col-md-9">

							<h1 class="mt-xl mb-none"><?php echo $icerikcek['icerik_ad']; ?></h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>




							<div class="row">


							<!--BAŞLANGIÇ-->

							<!--hidden-xs mobilde div gizleme-->
								<div class="col-md-12">

									<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<div class="col-md-12">
												
												<!--<span class="post-meta">
													<span>January 10, 2016 | <a href="#">John Doe</a></span>
												</span>-->
												<p style="font-size: 16px !important;">	<img src="<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive" alt="" style="float: left; width: 310px; height: 220px; padding:10px;"><?php echo $icerikcek['icerik_detay']; ?></p>
												<hr>
												<p style="font-size: 15px;"><b>Anahtar Kelimeler : </b>
												<!--<?php echo $icerikcek//['icerik_keyword']; ?>-->

											    <?php

											    $etiketler=explode(',' , $icerikcek['icerik_keyword']); 

										         //echo $etiketler[0];

											    /*
											    foreach ($etiketler as $etiketbas) { ?>
											    <!--echo $etiketbas; echo "  ";-->
											    <a href="arama?aranan=<?php echo $etiketbas; ?>">
											    <button class="btn btn-primary btn-xs"><?php echo $etiketbas; ?></button></a>
											    */

											    
											    //BUTON RENGİ SÜREKLİ DEĞİŞEN ANAHTAR KELİME KISMI.
											    foreach ($etiketler as $etiketbas) { 
											    $renk = rand(1,4); 
											    ?>
											    <a href="arama.php?aranan=<?php echo $etiketbas; ?>">
											    <button class="btn btn-<?php
											    if($renk==2) { ?>primary<?php } 
											    elseif ($renk==3) { ?>danger<?php } 
											    elseif ($renk ==1) { ?>warning<?php } 
											    elseif ($renk==4) {?>success<?php } ?> btn-xs" 
											    style="border-radius: 5px;"><?php echo $etiketbas; ?></button></a>			

											    <?php  } ?> 
											    </p><hr>
											    <a href="haberler.php"><button style="margin-bottom: 10px; float: left;"  class="btn btn-primary"><i class="fa fa-undo" aria-hidden="true"></i> Geri Dön</button>

										</div>

								    </span>

							    </div>

							<!--BİTİŞ-->		

							</div>

						</div>



<!-- SİDEBAR -->

 <?php include 'rightbar.php'; ?>

<!-- SİDEBAR -->



					</div>

				</div>
			</div>

 <?php include 'footer.php'; ?>