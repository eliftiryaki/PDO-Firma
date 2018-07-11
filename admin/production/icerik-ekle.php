<?php

include 'header.php';

include '../netting/baglan.php' ;

$iceriksor = $db->prepare("SELECT * FROM icerik WHERE icerik_id=?");
$iceriksor->execute(array(0));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)

?>

<head>
  <script src="js/ckeditor/ckeditor.js"></script>
</head>
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

                    <h2>İçerik İşlemleri<small>
                    
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
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name" >Resim Seç<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="file" id="first-name" required="required" placeholder="İçerik resmi" name="icerik_resimyol" value="<?php echo $icerikcek['icerik_resimyol']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name" >İçerik Zaman<span class="required">*</span>
                        </label>
                        <div class="col-md-3">
                           <input type="date" id="first-name" required="required" value="<?php echo date('Y-m-d'); ?>" name="icerik_tarih" class="form-control col-md-7 col-xs-12">
                        </div>

                        <div class="col-md-2">
                           <input type="time" id="first-name" required="required" value="<?php echo date("H:i:s"); ?>" name="icerik_saat" class="form-control col-md-7 col-xs-12">
                        </div>
                       </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name" >İçerik Ad<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" placeholder="İçerik adınız giriniz" name="icerik_ad" value="<?php echo $icerikcek['icerik_ad']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <textarea name="icerik_detay" class="ckeditor"><?php echo $icerikcek['icerik_detay'];?></textarea> 
                        <!--<textarea class="ckeditor" id="editor1" name="haber_icerik"></textarea>-->
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name" >İçerik Keyword<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" placeholder="Anahtar Kelimeyi giriniz" name="icerik_keyword" value="<?php echo $icerikcek['icerik_keyword']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                  

                     <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Durum<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id="heard" class="form-control" name="icerik_durum" required>
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                          </select>                 
                       </div>
                      </div>

                      <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                          <button type="submit" name="icerikkaydet" class="btn btn-primary">Kaydet</button>
              
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
