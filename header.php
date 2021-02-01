<?php require 'panel/islem/baglanti.php';

 $ayarlar=$baglanti->prepare("SELECT * From ayarlar where ayarnumara=?");    /*prepare sql güvenliğini sağlar.*/

$ayarlar->execute(array(2));

$ayarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);


 ?>



  <div class="sosyal">
    <ul class="left">
      <p class="bölge"><?php echo $ayarcek['adres'] ?>  </p>
      
    </ul>


   
    <ul class="right">
      <a href="<?php echo $ayarcek['facebook'] ?> "><i class="fab fa-facebook"></i></a>&ensp;
      &ensp;
      <a href="<?php echo $ayarcek['twitter'] ?> "><i class="fab fa-twitter"></i></a>&ensp;
      &ensp;
      <a href="<?php echo $ayarcek['instagram'] ?> "><i class="fab fa-instagram"></i></a>
    </ul>
  </div>



  <a href="#geçiş1" id="geçiş2" class="logo"><span><?php echo $ayarcek['ayarlogo'] ?></span><?php echo $ayarcek['ayarlogotesisat'] ?></a>



<div class="center">
  <ul class="email">EMAİL</br>
  <div class="dropdown"><span><?php echo $ayarcek['Email'] ?></span>
    <div class="dropdown-content">
      <p type="text" oncopy="myFunction()" value="#"><?php echo $ayarcek['Email'] ?>

<p id="ctrlc"></p>

<script>
function myFunction() {
  document.getElementById("ctrlc").innerHTML = "KOPYALANDI..."
}
</script>
</p>
    </div>
  </div>
</ul>

<ul class="phone">TELEFON</br>
  <div class="dropdown"><span><?php echo $ayarcek['Telefon'] ?></span>
    <div class="dropdown-content">
      <a href="tel://+905465363315"><?php echo $ayarcek['Telefonno'] ?></a></br>
      <a href="tel://+905465363315"><?php echo $ayarcek['telefonnoavrupa'] ?><!--ANDL:0546 536 3315--></a>
    </div>
  </div>
  </ul>

  <ul class="address">ADRES</br>
  <div class="dropdown"><span>türkiye, istanbul</span>
    <div class="dropdown-content">
      <p><?php echo $ayarcek['adresheader'] ?></p>
    </div>
  </div>
  </ul>

</div><!--center kapanış-->

<div class="butonheader">
  <a href="<?php echo $ayarcek['butontelefon'] ?>"><p class="buton" style="text-align: center; "><i class='fas fa-phone-volume' style='font-size:30px; color: black;'></i> BİZE ULAŞIN</a></p>
</div>

  </br></br></br></br></br></br></br>
  <header>
  <nav>
    <div class="menu">
      <ul>

<li><a href="index.php">ANASAYFA</a></li>


<li class="hizmet"><a href="#">HIZMETLERIMIZ</a>
  
<div class="acilir">
  <div class="dropdown">
  <img src="images/n.jpg"  width="100" height="50">
  <div class="dropdown-content">
  <img src="images/n.jpg"  width="300" height="200">
  <div class="desc">su kaçağı</div>
  </div>
</div></br>
  <div class="dropdown">
  <img src="images/sa.jpg"  width="100" height="50">
  <div class="dropdown-content">
  <img src="images/sa.jpg"  width="300" height="200">
  <div class="desc">su tesisatı</div>
  </div>
</div></br>
  <div class="dropdown">
  <img src="images/mm.jpg"  width="100" height="50">
  <div class="dropdown-content">
  <img src="images/mm.jpg"  width="300" height="200">
  <div class="desc">tadilat işleriniz</div>
  </div>
</div>
</div>
</li>
<li class="hizmet"><a id="section2" href="#kaydır1">SERVİS BÖLGELERİMİZ</a>
<div class="servis">
  <div class="dropdown">
  <img src="images/bakir.jpg"  width="100" height="50">
  <div class="dropdown-content">
  <img src="images/bakir.jpg"  width="300" height="200">
  <div class="desc">bakırköy geneli hizmetimiz</div>
  </div>
  
</div></br>
  <div class="dropdown">
  <img src="images/pendik.jpg" width="100" height="50">
  <div class="dropdown-content">
  <img src="images/pendik.jpg" width="300" height="200">
  <div class="desc">pendik geneli hizmetimiz</div>
  </div>
</div></br>
  <div class="dropdown">
  <img src="images/kadik.jpg"  width="100" height="50">
  <div class="dropdown-content">
  <img src="images/kadik.jpg"  width="300" height="200">
  <div class="desc">kadiköy geneli hizmetimiz</div>
  </div>
</div>
</div>
</li>

<li><a href="about.php">HAKKIMIZDA </a></li>

<li><a href="contact.php">ILETIŞIM</a></li> 


      </ul>
    </div>
  </nav>
  </header>