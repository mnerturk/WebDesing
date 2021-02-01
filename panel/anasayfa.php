<?php require 'header.php'; 

$ayarlar=$baglanti->prepare("SELECT * From ayarlar where ayarnumara=?");    /*prepare sql güvenliğini sağlar.*/

$ayarlar->execute(array(2));

$ayarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);

?>

    <section class="content">
        <div class="row">
        
          
        </div><div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">anasayfa ayarları</h3>
              </div>

             <form action="islem/islem.php" method="POST" role="form">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">SU İSE SORUN USTASINA SORUN</label>
                    <input name="suise" type="text" class="form-control" value="<?php echo $ayarcek['suise'] ?>" placeholder="SU İSE SORUN USTASINA SORUN">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">7/24 DESTEK</label>
                    <input name="724destek" type="text" class="form-control" value="<?php echo $ayarcek['724destek'] ?>" placeholder="7/24 DESTEK">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">bizi arayın</label>
                    <input name="biziarayin" type="text" class="form-control" value="<?php echo $ayarcek['biziarayin'] ?>" placeholder="bizi arayın">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">sponsorlar</label>
                    <input name="sponsorlar" type="text" class="form-control" value="<?php echo $ayarcek['sponsorlar'] ?>" placeholder="sponsorlar">
                  </div>

                <div class="card-footer">
                  <button name="ansayfagonder" type="submit" class="btn btn-success">gönder</button>
                </div>
              </form>
            </div>
         </section>