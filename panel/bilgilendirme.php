<?php require 'header.php'; 

$ayarlar=$baglanti->prepare("SELECT * From ayarlar where ayarnumara=?");    /*prepare sql güvenliğini sağlar.*/

$ayarlar->execute(array(2));

$ayarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);

?>

    <section class="content">
        <div class="row">
        
          
        </div><div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">site ayarları</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" role="form">
                <div class="card-body">
                  <div class="form-group">

                    <label for="exampleInputEmail1">bilgilendirme yazı</label>
                    <input style="height: 200px;" name="bilgilendirme" type="text" class="form-control" value="<?php echo $ayarcek['bilgilendirme'] ?>">
                  </div>
                 
                <div class="card-footer">
                  <button name="bilgilendirmegonder" type="submit" class="btn btn-success">gönder</button>
                </div>
              </form>
            </div>
         </section>