<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>su tesisat</title>
	<link rel="stylesheet"  href="css/style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script><!--icon emojilerin çalışması için-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>

</head>
<body>
<?php require 'header.php'; ?>

<section>
  <div class="box">
    <div>
      <span><video class="webkit" src="images/video3d.mp4" autoplay="" muted="" loop=""></video></span>
      <span><video src="images/video3d.mp4" autoplay="" muted="" loop=""></video></span>
      <span><video src="images/video3d.mp4" autoplay="" muted="" loop=""></video></span>
    </div>
  </div>
</section>

  <div class="video">
  <video src="images/video_Trim.mp4" autoplay muted loop type="mp4"></video>
  </div>

  
  <div class="banner">
  <div class="textBox"><center>
<h2>SU İSE SORUN USTASINA SORUN</h2>
<p>7/24 DESTEK</p>

<a href="<?php echo $ayarcek['butontelefon'] ?>"><i class='fas fa-tools' style='font-size:36px'></i> BİZİ ARAYIN</a></center>
</div>
</div>
<script type="text/javascript">
  var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
triggerElement: '.banner'
})
.setClassToggle('.banner', 'su')
.addTo(controller);

</script>



<div class="bilgilenme"><h6>BİLGİLENDİRME</h6>
  <div class="bilgi">
    <div class="bilg">
      <img src="images/bilgilendirme/vana.png">
      <h3>Kesin Çözüm</h3>
    </div>
   <div class="blg">
  <p><?php echo $ayarcek['bilgilendirme'] ?></br>
</p>
    </div>
  </div>

 <div class="bilgi">
    <div class="bilg">
      <img src="images/bilgilendirme/anahtar.svg">
      <h3>Gerçek Hizmet</h3>
    </div>
   <div class="blg">
  <p><?php echo $ayarcek['bilgilendirme'] ?></br>
</p>
    </div>
  </div>


 <div class="bilgi">
    <div class="bilg">
      <img src="images/bilgilendirme/usta.png">
      <h3>Dogru Usta</h3>
    </div>
   <div class="blg">
  <p><?php echo $ayarcek['bilgilendirme'] ?></br>
</p>
    </div>
  </div>

<div class="bilgi">
    <div class="bilg">
      <img src="images/bilgilendirme/one.svg">
      <h3>Nokta Atışı Tespit</h3>
    </div>
   <div class="blg">
  <p><?php echo $ayarcek['bilgilendirme'] ?></br>
</p>
    </div>
  </div>

  <div class="bilgi">
    <div class="bilg">
      <img src="images/bilgilendirme/1671.svg">
      <h3>Özlenen Hizmet</h3>
    </div>
   <div class="blg">
  <p><?php echo $ayarcek['bilgilendirme'] ?></br>
</p>
    </div>
  </div>

  <div class="bilgi">
    <div class="bilg">
      <img src="images/bilgilendirme/tree.svg">
      <h3>Hızlı Ulaşım</h3>
    </div>
   <div class="blg">
  <p><?php echo $ayarcek['bilgilendirme'] ?></br>
</p>
    </div>
  </div>

   <div class="bilgi">
    <div class="bilg">
      <img src="images/bilgilendirme/musluk.svg">
      <h3>Garanti Çözüm</h3>
    </div>
   <div class="blg">
  <p><?php echo $ayarcek['bilgilendirme'] ?></br>
</p>
    </div>
  </div>

   <div class="bilgi">
    <div class="bilg">
      <img src="images/bilgilendirme/sive.svg">
      <h3>Yakın Servis</h3>
    </div>
   <div class="blg">
  <p><?php echo $ayarcek['bilgilendirme'] ?></br>
</p>
    </div>
  </div>

   <div class="bilgi">
    <div class="bilg">
      <img src="images/bilgilendirme/six.svg">
      <h3>7/24 Destek</h3>
    </div>
   <div class="blg">
  <p><?php echo $ayarcek['bilgilendirme'] ?></br>
</p>
    </div>
  </div>

</div>










<form action="#">
<label for="fname">ADINIZ:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">SOYADINIZ:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
<label for="lname">YORUMLARINIZ BİZİM İÇİN DEĞERLİ...</label><br>
<textarea id="w3review" name="w3review" rows="4" cols="50">
  </textarea>
  <br><br>
  <button style="color: black;  font-size:22px;" type="submit">GÖNDER  <i class='fas fa-envelope-open' style='font-size:30px'></i></button>
</form>





<div class="sponsor">
  <ul>SPONSORLAR</ul>
  <div class="gallery">
  <a target="_blank" href="https://www.turkishairlines.com/tr-tr/">
    <img src="images/tr.jpg" width="600" height="400">
  </a>
  <div class="yazı">TÜRK HAVA YOLLARI</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://bjk.com.tr/tr">
    <img src="images/beşiktaş.jpg" width="600" height="400">
  </a>
  <div class="yazı">BEŞİKTAŞ SPOR KULÜBÜ</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.adidas.com.tr/tr">
    <img src="images/ad.png" width="600" height="400">
  </a>
  <div class="yazı">ADİDAS</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.aksa.com.tr/tr-tr/">
    <img src="images/aksa.jpg" width="600" height="400">
  </a>
  <div class="yazı">AKSA JENERATÖR</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.migros.com.tr/">
    <img src="images/migros.jpg" width="600" height="400">
  </a>
  <div class="yazı">MİGROS</div>
</div>

<div class="gallery">
  <a target="_blank" href="https://www.turkcell.com.tr/">
    <img src="images/turkcell.jpg" width="600" height="400">
  </a>
  <div class="yazı">TÜRKCELL</div>
</div>
</div>
<?php require 'footer.php'; ?>


  
 </body>
</html>
