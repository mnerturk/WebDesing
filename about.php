
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>hakkimizda</title>
	<link rel="stylesheet"  href="css/style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
</head>
<body>
<?php require 'header.php'; ?>


<div class="resim">
  <img src="images/n.jpg"width="100%" height="500">
</div><section class="aboutkrgbekran">
  
</section>

  <div class="tanitim">

    <div class="misyon">
    <ul><h2>MİSYONUMUZ</h2>
      <li>&ensp;<?php echo $ayarcek['aboutmisyon'] ?></li>
    </ul>
    </div>

    <div class="biz">
    <ul><h2>BİZ KİMİZ</h2>
      <li>&ensp;<?php echo $ayarcek['bizkimiz'] ?></li>
    </ul>
    </div>

    <div class="nasil">
    <ul><h2>NASIL ÇALIŞIRIZ</h2>
      <li>&ensp;<?php echo $ayarcek['nasilcalisiriz'] ?>.</li>
    </ul>
    </div>

    <div class="sukacag">
     <ul><h2>SU kaçağı</h2>
      <li>&ensp;<?php echo $ayarcek['sukacagi'] ?></li>
    </ul>
    </div>

  </div>
<script type="text/javascript">
  var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
triggerElement: '.misyon'
})
.setClassToggle('.misyon', 'ekleme')
.addTo(controller);

/*-------------------------------------------------------*/

var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
triggerElement: '.biz'
})
.setClassToggle('.biz', 'ekleme')
.addTo(controller);

/*-------------------------------------------------------*/

var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
triggerElement: '.nasil'
})
.setClassToggle('.nasil', 'ekleme')
.addTo(controller);

/*-------------------------------------------------------*/

var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
triggerElement: '.sukacag'
})
.setClassToggle('.sukacag', 'ekleme')
.addTo(controller);

</script>






<center>
  <ul><h1 id="kaydır1" href="#kaydır2">Servis Bölgelerimiz</h1></ul>
<div class="üst">
<div class="dropdow">
  <li>BAŞAKŞEHİR</li>
  <img src="images/1.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/1.jpg" width="300" height="200">
  <div class="yaz">BAŞAKŞEHİR GENELİ SERVİSİMİZ BULUNMAKTADIR...  </div>
  </div>
</div>
<div class="dropdow">
  <li>ÜSKÜDAR</li>
  <img src="images/2.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/2.jpg" width="300" height="200">
  <div class="yaz">ÜSKÜDAR GENELİ SERVİSİMİZ BULUNMAKTADIR...  </div>
  </div>
</div>
<div class="dropdow">
  <li>BEŞİKTAŞ</li>
  <img src="images/3.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/3.jpg" width="300" height="200">
  <div class="yaz">BEŞİKTAŞ GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>PENDİK</li>
  <img src="images/4.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/4.jpg" width="300" height="200">
  <div class="yaz">PENDİK GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>KARTAL </li>
  <img src="images/6.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/6.jpg" width="300" height="200">
  <div class="yaz">KARTAL ÜDAR GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>BEYOĞLU</li>
  <img src="images/7.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/7.jpg" width="300" height="200">
  <div class="yaz">BEYOĞLU GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
</div>
</br></br></br></br></br>

<div class="üst">
<div class="dropdow">
  <li>BAŞAKŞEHİR</li>
  <img src="images/1.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/1.jpg" width="300" height="200">
  <div class="yaz">BAŞAKŞEHİR GENELİ SERVİSİMİZ BULUNMAKTADIR...  </div>
  </div>
</div>
<div class="dropdow">
  <li>ÜSKÜDAR</li>
  <img src="images/2.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/2.jpg" width="300" height="200">
  <div class="yaz">ÜSKÜDAR GENELİ SERVİSİMİZ BULUNMAKTADIR...  </div>
  </div>
</div>
<div class="dropdow">
  <li>BEŞİKTAŞ</li>
  <img src="images/3.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/3.jpg" width="300" height="200">
  <div class="yaz">BEŞİKTAŞ GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>PENDİK</li>
  <img src="images/4.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/4.jpg" width="300" height="200">
  <div class="yaz">PENDİK GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>KARTAL </li>
  <img src="images/6.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/6.jpg" width="300" height="200">
  <div class="yaz">KARTAL ÜDAR GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>BEYOĞLU</li>
  <img src="images/7.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/7.jpg" width="300" height="200">
  <div class="yaz">BEYOĞLU GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
</div>

</br></br></br></br></br>
<div class="üst">
<div class="dropdow">
  <li>BAHÇELİEVLER</li>
  <img src="images/5.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/5.jpg" width="300" height="200">
  <div class="yaz">BAHÇELİEVLER GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>KARTAL </li>
  <img src="images/6.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/6.jpg" width="300" height="200">
  <div class="yaz">KARTAL ÜDAR GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>BEYOĞLU</li>
  <img src="images/7.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/7.jpg" width="300" height="200">
  <div class="yaz">BEYOĞLU GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>FATİH</li>
  <img src="images/8.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/8.jpg" width="300" height="200">
  <div class="yaz">FATİH GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>FATİH</li>
  <img src="images/8.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/8.jpg" width="300" height="200">
  <div class="yaz">FATİH GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>FATİH</li>
  <img src="images/8.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/8.jpg" width="300" height="200">
  <div class="yaz">FATİH GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
</div>
</br></br></br></br></br>


<div class="üst">
<div class="dropdow">
  <li>BAHÇELİEVLER</li>
  <img src="images/5.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/5.jpg" width="300" height="200">
  <div class="yaz">BAHÇELİEVLER GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>KARTAL </li>
  <img src="images/6.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/6.jpg" width="300" height="200">
  <div class="yaz">KARTAL ÜDAR GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>BEYOĞLU</li>
  <img src="images/7.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/7.jpg" width="300" height="200">
  <div class="yaz">BEYOĞLU GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>FATİH</li>
  <img src="images/8.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/8.jpg" width="300" height="200">
  <div class="yaz">FATİH GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>FATİH</li>
  <img src="images/8.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/8.jpg" width="300" height="200">
  <div class="yaz">FATİH GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>FATİH</li>
  <img src="images/8.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/8.jpg" width="300" height="200">
  <div class="yaz">FATİH GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
</div>
</br></br></br></br></br>


<div class="üst">
<div class="dropdow">
  <li>BAHÇELİEVLER</li>
  <img src="images/5.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/5.jpg" width="300" height="200">
  <div class="yaz">BAHÇELİEVLER GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>KARTAL </li>
  <img src="images/6.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/6.jpg" width="300" height="200">
  <div class="yaz">KARTAL ÜDAR GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>BEYOĞLU</li>
  <img src="images/7.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/7.jpg" width="300" height="200">
  <div class="yaz">BEYOĞLU GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>FATİH</li>
  <img src="images/8.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/8.jpg" width="300" height="200">
  <div class="yaz">FATİH GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>FATİH</li>
  <img src="images/8.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/8.jpg" width="300" height="200">
  <div class="yaz">FATİH GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
<div class="dropdow">
  <li>FATİH</li>
  <img src="images/8.jpg" width="200" height="100">
  <div class="açi">
  <img src="images/8.jpg" width="300" height="200">
  <div class="yaz">FATİH GENELİ SERVİSİMİZ BULUNMAKTADIR...   </div>
  </div>
</div>
</div>

</center>
</br></br></br></br></br>
<div class="tanitimright">
 <ul><h2>NEDEN BİZİ ARAMALISINIZ</h2>
      <li>&ensp;<?php echo $ayarcek['nedenbiziara'] ?>
      </li>
    </ul>
</div>
<script type="text/javascript">
  /*-------------------------------------------------------*/

var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
triggerElement: '.tanitimright'
})
.setClassToggle('.tanitimright', 'ekleme')
.addTo(controller);

</script>
</body>
</html>









<?php require 'footer.php'; ?>