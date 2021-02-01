<?php require 'header.php'; 

$ayarlar=$baglanti->prepare("SELECT * From ayarlar where ayarnumara=?");    /*prepare sql güvenliğini sağlar.*/

$ayarlar->execute(array(2));

$ayarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);

?>

    <section class="content">
        <div class="row">
        
          
        </div><div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">about ayarları</h3>
              </div>
              
           
              <form action="islem/islem.php" method="POST" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">misyon yazısı</label>
                    <input name="aboutmisyon" type="text" class="form-control" value="<?php echo $ayarcek['aboutmisyon'] ?>" placeholder="sitenizin logosunu giriniz.">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">biz kimiz yazısı</label>
                    <input name="bizkimiz" type="text" class="form-control" value="<?php echo $ayarcek['bizkimiz'] ?>" placeholder="sitenizin logosunu giriniz. ">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">nasıl çalışırız</label>
                    <input name="nasilcalisiriz" type="text" class="form-control" value="<?php echo $ayarcek['nasilcalisiriz'] ?>" placeholder="sitenizin logosunu giriniz. ">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">su kaçağı</label>
                    <input name="sukacagi" type="text" class="form-control" value="<?php echo $ayarcek['sukacagi'] ?>" placeholder="sitenizin logosunu giriniz. ">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">neden bizi aramalısınız</label>
                    <input name="nedenbiziara" type="text" class="form-control" value="<?php echo $ayarcek['nedenbiziara'] ?>" placeholder="sitenizin anahtar kelime giriniz. ">
                  </div>

                <div class="card-footer">
                  <button name="aboutgonder" type="submit" class="btn btn-success">gönder</button>
                </div>
              </form>
            </div>
         </section>