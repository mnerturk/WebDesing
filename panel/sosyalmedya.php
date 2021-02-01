<?php require 'header.php'; 


$ayarlar=$baglanti->prepare("SELECT * From ayarlar where ayarnumara=?");    /*prepare sql güvenliğini sağlar.*/

$ayarlar->execute(array(2));

$ayarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);

?>

    <section class="content">
        <div class="row">
        
          
        </div><div class="card card-primary">
              <div class="card-header">
                
                <h3 class="card-title">header/footer=sosyal medya url ayarları</h3>
              </div>
              
              <form action="islem/islem.php" method="POST" role="form">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">facebook</label>
                    <input name="facebook" type="text" class="form-control" value="<?php echo $ayarcek['facebook'] ?>"  placeholder="sitenizin logosunu giriniz.">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">twitter</label>
                    <input name="twitter"  type="text" class="form-control" value="<?php echo $ayarcek['twitter'] ?>"  placeholder="sitenizin logosunu giriniz. ">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">instagram</label>
                    <input name="instagram"  type="text" class="form-control" value="<?php echo $ayarcek['instagram'] ?>"  placeholder="sitenizin anahtar kelime giriniz. ">
                  </div>

                <div class="card-footer">
                  <button name="sosyalmedyagonder" type="submit" class="btn btn-success">gönder</button>
                </div>
              </form>
            </div>
         </section>
     
 