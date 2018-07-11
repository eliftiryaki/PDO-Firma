<?php 

include 'header.php'; 
include '../netting/baglan.php' ;


if(isset($_POST['arama'])) {

$aranan = $_POST['aranan'];

$iceriksor = $db -> prepare("SELECT * FROM icerik where icerik_ad LIKE '%$aranan%' order by icerik_id ASC limit 25");// arama yapmak için kullanılır.
$iceriksor -> execute();
$say = $iceriksor->rowCount();
} else {
$iceriksor = $db -> prepare("SELECT * FROM icerik order by icerik_id DESC limit 25");
$iceriksor -> execute();
$say = $iceriksor->rowCount();// kaç kayıt var bunu bulur.
} 

?>


       <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title"></div>


            <div class="col-md-12">
             <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">



                <form action="" method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelime Giriniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" name="arama" type="submit">Ara</button>
                    </span>
                  </div>
                </form>
               </div>
              </div>
            </div>




              <div class="clearfix"></div>

               <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                   <div class="x_title">
                    <div align="left" class="col-md-6">
                    <h2>icerik İşlemleri <small>
                    
                    <?php 

                    echo $say . " Kayıt Listelendi";

                    if(@$_GET['durum']=='ok') { ?>
                      
                    <b style="color:green;">İşlem başarılı...</b>
                    
                    <?php } elseif(@$_GET['durum']=='no') { ?>

                    <b style="color:green;">İşlem başarısız...</b>

                    <?php } ?> 

                    </small></h2><br>
                    </div>

                     <div align="right" class="col-md-6">
                     <a href="icerik-ekle.php"><button class="btn btn-danger"><i class="fa fa-plus" aria-hidden="true"></i>Yeni Ekle</button></a>
                     </div>
                    <div class="clearfix"></div>
                  </div>


                    <div class="table-responsive">
                      <table style="font-size:14px" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th width="179">İçerik Tarih </th>
                            <th class="column-title">İçerik Ad </th>
                            <th class="text-center column-title">İçerik Durum</th>
                            <th width="80" class="column-title"></th>
                            <th width="80" class="column-title"></th>
                          </tr>
                        </thead>
                        <tbody>


                        <?php
                        while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                          <tr >

                            <td><?php echo $icerikcek['icerik_zaman']; ?></td>
                            <td><?php echo $icerikcek['icerik_ad']; ?></td>
                            <td class="text-center">
                            <?php
                            if($icerikcek['icerik_durum']=="1") {
                              echo "AKTİF";
                            } else {
                              echo "PASİF";
                            }
                            ?>
                            </td>

                            <form action="../netting/islem.php"  method="POST" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                          <!--Getten gelen gizli id tanımladık.-->
                            <input type="hidden" name="icerik_resimyolsil" value="<?php echo $icerikcek['icerik_resimyol']; ?>">
                            </form>

                            <td class="text-center"><a href="icerik-duzenle.php?icerik_id=<?php echo $icerikcek['icerik_id']; ?>"><button style="width: 80px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i>Düzenle</button></a></td>

                            <td class="text-center"><a href="../netting/islem.php?iceriksil=ok&icerik_id=<?php echo $icerikcek['icerik_id']; ?>&icerikresimsil=<?php echo $icerikcek['icerik_resimyol']; ?>"><button style="width: 80px;" class="btn btn-danger btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i>Sil</button></a></td>
                          </tr>  
                          <?php } ?>   





                        </tbody>
                      </table>
                    </div>
                    
                    <div class="x_content"></div>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>


<?php include 'footer.php'; ?>
