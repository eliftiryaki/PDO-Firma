<?php

$hakkimizdasor = $db->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>

<!-- SİDEBAR -->
						<div class="col-md-3">
							<aside class="sidebar">

								<h4 class="mt-xl mb-md"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h4>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>

								<div class="embed-responsive embed-responsive-16by9 mb-xl">
								<iframe width="200" height="113" src="https://www.youtube.com/embed/<?php echo $hakkimizdacek['hakkimizda_video']; ?>" frameborder="0" allowfullscreen></iframe><!--<iframe width="200" height="113" src="https://www.youtube.com/embed/0b2Mrfo-AqQ?ecver=1" frameborder="0" allowfullscreen></iframe> = 0b2Mrfo-AqQ?ecver=1 bu kod kısmına çekilir veri. Paneleden ıstenılen vıdeo kodu eklenebılır.-->
							   </div>

							 
							<h4 class="mt-xlg">Vizyonumuz</h4>
							<div class="divider divider-primary divider-small mb-xl">
						     <hr>
							</div>

							<blockquote class="blockquote-secondary">
								<p class="font-size-lg"><?php echo $hakkimizdacek['hakkimizda_vizyon']; ?></p>
								<footer>Vizyonumuz</footer>
							</blockquote>


							<h4 class="mt-xlg">Misyonumuz</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<blockquote class="blockquote-secondary">
								<p class="font-size-lg"><?php echo $hakkimizdacek['hakkimizda_misyon']; ?></p>
								<footer>Misyonumuz</footer>
							</blockquote>

							</aside>
						</div>