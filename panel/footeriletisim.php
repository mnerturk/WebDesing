<?php require 'header.php'; 

$ayarlar=$baglanti->prepare("SELECT * From ayarlar where ayarnumara=?");    /*prepare sql güvenliğini sağlar.*/

$ayarlar->execute(array(2));

$ayarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);

?>

     <section class="content">
        <div class="row">
        
          
        </div><div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">footer=vizyon misyon yazı ayarları</h3>
              </div>
              
              <form action="islem/islem.php" method="POST" role="form">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">vizyon</label>
                    <input name="vizyon" type="text" class="form-control" value="<?php echo $ayarcek['vizyon'] ?>"  placeholder="sitenizin logosunu giriniz.">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">misyon</label>
                    <input name="misyon"  type="text" class="form-control" value="<?php echo $ayarcek['misyon'] ?>"  placeholder="sitenizin logosunu giriniz. ">
                  </div>
        
                <div class="card-footer">
                  <button name="footergonder" type="submit" class="btn btn-success">gönder</button>
                </div>
              </form>
            </div>
         </section>