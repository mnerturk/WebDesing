<?php require 'header.php'; 

$ayarlar=$baglanti->prepare("SELECT * From ayarlar where ayarnumara=?");    /*prepare sql güvenliğini sağlar.*/

$ayarlar->execute(array(2));

$ayarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);

?>

    <section class="content">
        <div class="row">
        
          
        </div><div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">header ayarları</h3>
              </div>
              
              <form action="islem/islem.php" method="POST" role="form">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input name="Email" type="text" class="form-control"  value="<?php echo $ayarcek['Email'] ?>" placeholder="sitenizin logosunu giriniz.">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">telefon</label>
                    <input name="Telefon" type="text" class="form-control" value="<?php echo $ayarcek['Telefon'] ?>" placeholder="sitenizin logosunu giriniz. ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">telefon avrupa</label>
                    <input name="telefonnoavrupa" type="text" class="form-control" value="<?php echo $ayarcek['telefonnoavrupa'] ?>" placeholder="sitenizin logosunu giriniz. ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">telefon anadolu</label>
                    <input name="Telefonno" type="text" class="form-control" value="<?php echo $ayarcek['Telefonno'] ?>" placeholder="sitenizin logosunu giriniz. ">
                  </div>


                   <div class="form-group">
                    <label for="exampleInputEmail1">altadres</label>
                    <input name="altadres" type="text" class="form-control" value="<?php echo $ayarcek['altadres'] ?>" placeholder="sitenizin anahtar kelime giriniz. ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">buton telefon</label>
                    <input name="butontelefon" type="text" class="form-control" value="<?php echo $ayarcek['butontelefon'] ?>" placeholder="sitenizin anahtar kelime giriniz. ">
                  </div>

                 <div class="card-footer">
                  <button name="iletisimgonder" type="submit" class="btn btn-success">gönder</button>
                </div>
              </form>
            </div>
         </section>