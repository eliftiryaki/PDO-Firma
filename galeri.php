 
<?php

include 'header.php'; 

?>
			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">

						<div class="col-md-9">

							<h1 class="mt-xl mb-none"></h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>




							<div class="row">

								<ul class="team-list mt-xs">

							                   <?php

						                     //sayfalama başlangıcı

                                 $sayfada = 18; //sayfada gösterilecek içerik miktarını belirliyoruz.

                                 $sorgu = $db -> prepare("SELECT * from galeri");

                                 $sorgu -> execute();

                                 $toplam_icerik  = $sorgu -> rowCount();

                                 $toplam_sayfa = ceil($toplam_icerik / $sayfada); //ceil = yuvarlama
 
                                 $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;// eğer sayfa girilmemişse 1 varsayalım.
                                  //get doluysa ve sayfa 1 ise 

                                 if($sayfa < 1) $sayfa = 1;// eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.

                                 if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.

                                 $limit = ($sayfa - 1) * $sayfada;// kaçıncı içerikten başlanacağını ifade edecek limit değeri.
                            
                                 // sayfalama bitiş.

                                 $galerisor = $db->prepare("SELECT * FROM galeri order by galeri_id DESC limit $limit,$sayfada");

                                 $galerisor->execute();

                                 while ( $galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) {

                                  ?>

									<li class="col-md-4 col-sm-6 mb-xl center isotope-item criminal-law new-york">
										<a href="<?php echo $galericek['galeri_resimyol']; ?>"">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span class="thumb-info-wrapper">
													<img style="width:245px; height:164px;" src="<?php echo $galericek['galeri_resimyol']; ?>" class="img-responsive" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner"> Daha Fazlası..</span>
													</span>
												</span>
											</span>
										</a>
									</li>

                                 <?php } ?>

							</ul>

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

                            <a href="galeri?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a> 
                       
                           </li>

                           <?php } else { ?>

                           <li>

                        	<a href="galeri?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                           </li>

                           <?php } 
                         
                           }
                        
                           ?>

                           </ul>

                           </div>

                
                       <!--Sayfalama başlangıcı-->
							</div>






						</div>

<?php include 'rightbar.php'; ?>

					</div>
				</div>
			</div>

<?php include 'footer.php'; ?>