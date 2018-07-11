<?php

include 'header.php';

include '../netting/baglan.php' ;

$menusor = $db->prepare("SELECT * FROM menu WHERE menu_id=?");
$menusor->execute(array(0));
$menucek=$menusor->fetch(PDO::FETCH_ASSOC)

?>

<head>
  <script src="js/ckeditor/ckeditor.js"></script>
  <!-- Select2 -->
  <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
</head>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Menü İşlemleri</h3>
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

                    <h2>Menü İşlemleri<small>
                    
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
                  <form action="../netting/islem.php"  method="POST" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left">


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Üst Menü Seç</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <select class="select2_single form-control" required="" name="menu_ust" tabindex="-1">
                            <option></option>

                            <option value="0">Üst Menü</option>

                            <?php

                            $menusor = $db -> prepare("SELECT * FROM menu where menu_ust=:menu_ust order by menu_sira");

                            $menusor -> execute(array(

                            'menu_ust' => 0 

                            ));

                            While($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { ?>

                            <option value="<?php echo $menucek['menu_id']; ?>"><?php echo $menucek['menu_ad']; ?></option>

                            <?php } ?>

                          </select>
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name" >Menü Ad<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" placeholder="Menü adınız giriniz" name="menu_ad" value="<?php echo $menucek['menu_ad']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name" >Menü Url<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" placeholder="Menü url giriniz" name="menu_url" value="<?php echo $menucek['menu_url']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Detay<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <textarea name="menu_detay" class="ckeditor"><?php echo $menucek['menu_detay'];?></textarea> 
                        <!--<textarea class="ckeditor" id="editor1" name="haber_icerik"></textarea>-->
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name" >Menü Sıra<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" name="menu_sira" value="0" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                     <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Durum<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id="heard" class="form-control" name="menu_durum" required>
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                          </select>                 
                       </div>
                      </div>

                      <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                          <button type="submit" name="menukaydet" class="btn btn-primary">Kaydet</button>
              
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

<script src="../vendors/select2/dist/js/select2.full.min.js"></script>

  <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a state",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->

<?php include 'footer.php'; ?>


