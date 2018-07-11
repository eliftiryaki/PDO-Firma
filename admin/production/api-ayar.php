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

                    <h2>İletişim Ayarları 
                    <small>

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
                  <form id="demo-form2" action="../netting/islem.php"  method="POST"data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Recapctha Api<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" placeholder="Google recapctha apisini giriniz" name="ayar_recapctha" value="<?php echo $ayarcek['ayar_recapctha']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Map Api<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  placeholder="Google apisini giriniz" name="ayar_goooglemap" value="<?php echo $ayarcek['ayar_goooglemap']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Analystic<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" placeholder="Google Analystic UA- izleme kimliğini giriniz" name="ayar_analystic" value="<?php echo $ayarcek['ayar_analystic']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="apiayarkaydet" class="btn btn-primary">Güncelle</button>
              
                        </div>

                      
                  </form>
<!--Form Oluşturma-->
                    
                    </div>
                  </div>
                </div>
<!--Tablo-->




        

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


<?php include 'footer.php'; ?>
