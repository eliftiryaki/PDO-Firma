        if(mysql_affected_rows())
        {

            $resim_sil=$_GET['sliderresimsil'];
            unlink("..//$resim_sil");
            header("location:../slider.php?durum=ok");
        }

        else
        
        {
        
            header("location:../slider.php?durum=no");
        
        }




          <td><a href="netting/islem.php?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok&sliderresimsil=<?php echo $slidercek['slider_resimyol'];?>"><button class="btn btn-danger">Sil</button><!--Birden fazla get kullandığımız için hangı get oldugunu anlaması ıcın bır get daha oluşturuyoruz.(&slidersil=ok) bu şekilde--></td>