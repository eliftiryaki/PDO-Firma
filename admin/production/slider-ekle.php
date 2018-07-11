<?php

include 'header.php';

include '../netting/baglan.php' ;

$slidersor = $db->prepare("SELECT * FROM slider WHERE slider_id=?");
$slidersor->execute(array(0));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)

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

                    <h2>Slider İşlemleri<small>
                    
                    <?php 

                    if(@$_GET['durum']=='ok') { ?>
                      
                    <b style="color:green;">İşlem başarılı...</b>
                    
                    <?php } elseif(@$_GET['durum']=='no') { ?>

                    <b style="color:green;">İşlem başarısız...</b>

                    <?php } ?> 

                    </small></h2>

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

<!--Form Oluşturma-->
                  <form action="../netting/islem.php"  method="POST" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Resim Seç<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="first-name" required="required" name="slider_resimyol" value="<?php echo $slidercek['slider_resimyol']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Slider Ad<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" placeholder="Slider adınız giriniz" name="slider_ad" value="<?php echo $slidercek['slider_ad']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Link<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  placeholder="Slider linkini giriniz" name="slider_link"  value="<?php echo $slidercek['slider_link']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" placeholder="Slider sırasını giriniz" name="slider_sira" value="<?php echo $slidercek['slider_sira']; ?>" value="0" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durum<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" class="form-control" name="slider_durum" required>
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                          </select>                 
                       </div>
                      </div>

                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="sliderkaydet" class="btn btn-primary">Kaydet</button>
              
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
