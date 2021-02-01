<?php require 'header.php';

$ayarlar=$baglanti->prepare("SELECT * From ayarlar where ayarnumara=?");    /*prepare sql güvenliğini sağlar.*/

$ayarlar->execute(array(2));

$ayarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);

 ?>

    <section class="content"><!--BU BİTTİ GİRME-->
        <div class="row">
        
          
        </div><div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">site ayarları</h3>
              </div>
             
              <form action="islem/islem.php" method="POST" role="form">
                <div class="card-body">


                  <div class="form-group">
                    <label for="exampleInputEmail1">logo su</label>
                    <input name="ayarlogo" type="text" class="form-control"  value="<?php echo $ayarcek['ayarlogo'] ?>" placeholder="sitenizin logosunu giriniz.">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">logo tesisat</label>
                    <input name="ayarlogotesisat" type="text" class="form-control"  value="<?php echo $ayarcek['ayarlogotesisat'] ?>" placeholder="sitenizin logosunu giriniz.">
                  </div>
                 
                      
                   <div class="form-group">
                    <label for="exampleInputEmail1">adres</label>
                    <input name="adres"  type="text" class="form-control"  value="<?php echo $ayarcek['adres'] ?>"  placeholder="sitenizin anahtar kelime giriniz. ">
                  </div>

                <div class="card-footer">
                  <button name="gonder" type="submit" class="btn btn-success">gönder</button>
                </div>
              </form>
            </div>
          </section>
