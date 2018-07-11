<?php 

include 'header.php';

$galerisor = $db->prepare("SELECT * FROM galeri");

$galerisor->execute(); 

$say = $galerisor->rowCount();// kaç kaıt var bunu bulur.


?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Galeri</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                    <!-- page content -->

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Resim Galeri<small>
                    <?php 
                    echo $say . " Kayıt Listelendi";
                    if(@$_GET['durum']=='ok') { ?>
                    <b style="color:green;">Güncelleme başarılı...</b>
                    <?php } elseif(@$_GET['durum']=='no') { ?>
                    <b style="color:green;">Güncelleme başarısız...</b>
                    <?php } ?> 
                    </small></h2>


<!--GALERİ YÜKLE-->
                    <div align="right" class="col-md-6">
                       <form action="galeri-yukle.php" method="POST">
                       <button type="submit" class="btn btn-danger"><i class="fa fa-plus" aria-hidden="true"></i> Galeri Yükle</button>
                      </form>
                    </div>
<!--GALERİ YÜKLE-->

<!--GALERİ SİL-->
                     <form action="../netting/galeri.php" method="POST">
                     <div  align="right" class="col-md-1">
                     <button type="submit" name="galeritoplusil" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i> Seçilemleri Sil</button>
                     </div>

                     <div class="clearfix"></div>

                     </div>
      
                     <tbody>

                     <?Php

                     While ($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) { ?>

                     <tr>

                     <td>

                      <div class="col-md-55">

                        <div class="thumbnail">

                          <div class="image view view-first">

                            <img style="width: 100%; display: block;" src="../../<?php echo $galericek['galeri_resimyol']; ?>" alt="image" /> </div>

                            <div class="caption">

                           <input type="checkbox" name="toplusil[]" value="<?php echo $galericek['galeri_id']; ?>" /> Seç

                           <!--Gizli post gönderdik-->
                           <input type="hidden" name="galeri_resimyol" value="<?php echo $galericek['galeri_resimyol']; ?>">
                            <!--Gizli post gönderdik-->

                          </div>

                        </div>

                      </div>

                      </td>

                      </tr>

                      <?php } ?>

                      </tbody>

                    </form>
<!--GALERİ SİL-->

                    </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->             


              </div>
            </div>
        <!-- /page content -->


<?php include 'footer.php'; ?>
