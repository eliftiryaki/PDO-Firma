 
 <?php

 include 'header.php'; 

 ?>

			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">

						<div class="col-md-9">

							<h1 class="mt-xl mb-none">Haberler</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>




							<div class="row">

							<?php

							//sayfalama başlangıcı

                            $sayfada = 4; //sayfada gösterilecek içerik miktarını belirliyoruz.

                            $sorgu = $db -> prepare("SELECT * from icerik");
                            $sorgu -> execute();
                            $toplam_icerik  = $sorgu -> rowCount();

                            $toplam_sayfa = ceil($toplam_icerik / $sayfada); //ceil = yuvarlama
 
                            $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;// eğer sayfa girilmemişse 1 varsayalım.
                            //get doluysa ve sayfa 1 ise 

                            if($sayfa < 1) $sayfa = 1;// eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.

                            if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.

                            $limit = ($sayfa - 1) * $sayfada;// kaçıncı içerikten başlanacağını ifade edecek limit değeri.
                            
                            // sayfalama bitiş.
                            $iceriksor=$db->prepare("SELECT * from icerik order by icerik_zaman DESC limit $limit,$sayfada");
                            $iceriksor->execute();
							While($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>

							<!--BAŞLANGIÇ-->

							<!--hidden-xs mobilde div gizleme-->
								<div class="col-md-12">
									<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<span class="thumb-info-side-image-wrapper p-none hidden-xs">
											<a title="" href="#">
												<img width="200" height="200" src="<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive" alt="" style="width: 195px; padding:10px;">
											</a>
										</span>
										<span class="thumb-info-caption">
											<span>
												<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="#"><?php echo $icerikcek['icerik_ad']; ?></a></h2>
												<!--<span class="post-meta">
													<span>January 10, 2016 | <a href="#">John Doe</a></span>
												</span>-->
												<p style="font-size: 16px !important;"><?php echo mb_substr($icerikcek['icerik_detay'],0,250,"utf-8"); ?>...</p>
												<a class="mt-md" href="haber-<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"]?>"> <p style="font-size: 15px; float: right; padding-left:10px;">Devamını Oku <i class="fa fa-long-arrow-right"></i></a></p>
											</span>
										</span>
									</span>
							    </div>

							<!--BİTİŞ-->

							<?php } ?>

						   <div align="right" class="col-md-12">

						   <!--Sayfalama başlangıcı-->                
                           <ul class="pagination">

                           <?php

                           $s=0;

                           while ($s < $toplam_sayfa) {
                          
                           $s++; ?>

                           <?php

                           if($s==$sayfa) { ?>

                           <li class="active">

                            <a href="haberler?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a> 
                       
                           </li>

                           <?php } else { ?>

                           <li>

                        	<a href="haberler?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                           </li>

                           <?php } 
                         
                           }
                        
                           ?>

                           </ul>

                           </div>

                
                       <!--Sayfalama başlangıcı-->


							</div>




						</div>



<!-- SİDEBAR -->

 <?php include 'rightbar.php'; ?>
						
<!-- SİDEBAR -->



					</div>

				</div>
			</div>

 <?php include 'footer.php'; ?>