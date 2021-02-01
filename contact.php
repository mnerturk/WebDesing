
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>iletişim</title>
	<link rel="stylesheet"  href="css/style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
</head>
<body>
<?php require 'header.php'; ?>


<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24083.51034635947!2d28.947565609726794!3d41.01565512518446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9eb9d587135%3A0x8aa0bb6b1dd6ffb7!2zRW1pbsO2bsO8LCBSw7xzdGVtIFBhxZ9hLCBGYXRpaC_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1605972058390!5m2!1str!2str" width="100%" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>

<div class="contact">
	<center>
<form action="panel.php">
<label for="fname">ADINIZ:</label><br>
  <input type="text" id="fname" name="fname" onpaste="myFunction1()" value=""><br>

  <label for="lname">SOYADINIZ:</label><br>
  <input type="text" id="lname" name="lname" onpaste="myFunction1()" value=""><br><br>

<label for="lname">EMAİL:</label><br>
<input type="text" id="lname" name="lname" onpaste="myFunction1()" value=""><br><br>


<label for="lname">Size dönelim...</label><br>
<textarea onpaste="myFunction1()" value="" id="w3review" name="w3review" rows="4" cols="50">
  </textarea></br>


<label for="country">Yaşadığınız İLÇE</label><br>
    <select id="country" name="country">
    	<option value="seçiniz">SEÇİNİZ...</option>
      <option value="ADALAR">ADALAR</option>
      <option value="ARNAVUTKÖY">ARNAVUTKÖY</option>
      <option value="AVCILAR">AVCILAR</option>
      <option value="BAĞCILAR">BAĞCILAR</option>
      <option value="BAHÇELİEVLER">BAHÇELİEVLER</option>
      <option value="BAKIRKÖY">BAKIRKÖY</option>
      <option value="BAŞAKŞEHİR">BAŞAKŞEHİR</option>
      <option value="BAYRAMPAŞA">BAYRAMPAŞA</option>
      <option value="BEŞİKTAŞ">BEŞİKTAŞ</option>
      <option value="BEYKOZ">BEYKOZ</option>
      <option value="BEYLİKDÜZÜ">BEYLİKDÜZÜ</option>
      <option value="BEYOĞLU">BEYOĞLU</option>
      <option value="BÜYÜKÇEKMECE">BÜYÜKÇEKMECE</option>
      <option value="ÇATALCA">ÇATALCA</option>
      <option value="ÇEKMEKÖY">ÇEKMEKÖY</option>
      <option value="ESENLER">ESENLER</option>
      <option value="#">burda olamayan...</option>
    </select>

  <br><br>
  <button type="submit">GÖNDER</button>

    <p style="color:red; font-size: 32px;" id="ctrlv" ></p>

<script>
var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
triggerElement: '.contact'
})
.setClassToggle('.contact', 'show')
.addTo(controller);


function myFunction1() {
  alert(document.getElementById("ctrlv").innerHTML = "YAPIŞTIRILDI...");
}
</script>



</form>
</center>
</div>


</body>
</html>









<?php require 'footer.php'; ?>