<?php

include 'header.php';

include '../netting/baglan.php' ;

$ayarsor = $db->prepare("SELECT * FROM ayar WHERE ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

             <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara</button>
                    </span>
                  </div>
                </div>
              </div>-->
            </div>

            <div class="clearfix"></div>


<!--Tablo-->
               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">

                    <h2>Genel Ayarlar <small>
                    
                    <?php 

                    if(@$_GET['durum']=='ok') { ?>
                      
                    <b style="color:green;">Güncelleme başarılı...</b>
                    
                    <?php } elseif(@$_GET['durum']=='no') { ?>

                    <b style="color:green;">Güncelleme başarısız...</b>

                    <?php } ?> 

                    </small></h2>


                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

<!--Form Oluşturma-->
                   <form action="../netting/islem.php"  method="POST" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Yüklü Logo<br>313x103 px<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                        <?php

                        if (strlen($ayarcek['ayar_logo']) > 0 ) { ?>

                        <img width="120" height="80" src="../../<?php echo $ayarcek['ayar_logo']; ?>">  

                       <?php } else { ?>

                       <img width="120" height="80" src="../../dimg/logo-yok.png">  

                        <?php } ?>

                       </div>
                      </div>


                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Resim Seç<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" name="ayar_logo" value="<?php echo $ayarcek['ayar_logo']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <input type="hidden" name="eski_logo" value="<?php echo $ayarcek['ayar_logo']; ?>">


                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="logoduzenle" class="btn btn-primary">Güncelle</button>
                      </div>

                    </form>
<!--Form Oluşturma-->


<!--#################################################################################################-->

<hr>


<!--Form Oluşturma-->
                  <form id="demo-form2" action="../netting/islem.php"  method="POST"data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Adresi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_siteurl" value="<?php echo $ayarcek['ayar_siteurl']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığınız<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklama<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Anahtar Kelimeler<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Yazar<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="ayar_author" value="<?php echo $ayarcek['ayar_author']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="genelayarkaydet" class="btn btn-primary">Güncelle</button>
                      </div>

                      
                  </form>
<!--Form Oluşturma-->
                    
                    </div>
                  </div>
                </div>
<!--Tablo-->

          </div>
            </div>
        <!-- /page content -->
<?php include 'footer.php'; ?>