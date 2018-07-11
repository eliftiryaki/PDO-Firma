<?php

include 'header.php';

include '../netting/baglan.php' ;

$hakkimizdasor = $db->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>

<head>
  <script src="js/ckeditor/ckeditor.js"></script>
</head>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Hakkımızda</h3>
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
                  <form id="demo-form2" action="../netting/islem.php"  method="POST"data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Başlık<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" name="hakkimizda_baslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçeriği<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <textarea name="hakkimizda_icerik" class="ckeditor"><?php echo $hakkimizdacek['hakkimizda_icerik'];?></textarea> 
                        <!--<textarea class="ckeditor" id="editor1" name="haber_icerik"></textarea>-->
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Video<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" name="hakkimizda_video" value="<?php echo $hakkimizdacek['hakkimizda_video']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Vizyon<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" name="hakkimizda_vizyon" value="<?php echo $hakkimizdacek['hakkimizda_vizyon']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Misyon<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" name="hakkimizda_misyon" value="<?php echo $hakkimizdacek['hakkimizda_misyon']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                          <button type="submit" name="hakkimizdakaydet" class="btn btn-primary">Güncelle</button>
              
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
