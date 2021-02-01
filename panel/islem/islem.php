
<?php require 'baglanti.php';



/*--------------------------------------------------------------------------*/

/*header genel ayarları*/

if (isset($_POST['gonder'])) {
	
$kaydet=$baglanti->prepare("UPDATE ayarlar SET

ayarlogo=:ayarlogo,  /* 1. veritabanı 2.ayarlar.phpdeki*/
ayarlogotesisat=:ayarlogotesisat,
adres=:adres
WHERE ayarnumara=2");

$update=$kaydet->execute(array(

'ayarlogo'=>$_POST['ayarlogo'],
'ayarlogotesisat'=>$_POST['ayarlogotesisat'],
'adres'=>$_POST['adres'] ));

if ($update) {
	header("location:../ayarlar.php?durum=okey");
}
else{
	header("location:../ayarlar.php?durum=no");
}

}



/*--------------------------------------------------------------------------*/


/*header iletişim ayarları*/
if (isset($_POST['iletisimgonder'])) {
	
$kaydet=$baglanti->prepare("UPDATE ayarlar SET

Telefonno=:Telefonno,/* 1. veritabanı 2.ayarlar.phpdeki*/
Telefon=:Telefon,
Email=:Email,
telefonnoavrupa=:telefonnoavrupa,
butontelefon=:butontelefon,
altadres=:altadres
WHERE ayarnumara=2");

$update=$kaydet->execute(array(


'Telefonno'=>$_POST['Telefonno'],
'Telefon'=>$_POST['Telefon'],
'Email'=>$_POST['Email'],
'telefonnoavrupa'=>$_POST['telefonnoavrupa'],
'butontelefon'=>$_POST['butontelefon'],
'altadres'=>$_POST['altadres'] ));

if ($update) {
	header("location:../headeriletisim.php?durum=okey");
}
else{
	header("location:../headeriletisim.php?durum=no");
}

}


/*--------------------------------------------------------------------------*/



/*sosyal medya header*/

if (isset($_POST['sosyalmedyagonder'])) {
	
$kaydet=$baglanti->prepare("UPDATE ayarlar SET

facebook=:facebook,  /* 1. veritabanı 2.ayarlar.phpdeki*/
twitter=:twitter,
instagram=:instagram
WHERE ayarnumara=2");

$update=$kaydet->execute(array(

'facebook'=>$_POST['facebook'],
'twitter'=>$_POST['twitter'],
'instagram'=>$_POST['instagram'] ));

if ($update) {
	header("location:../sosyalmedya.php?durum=okey");
}
else{
	header("location:../sosyalmedya.php?durum=no");
}

}



/*--------------------------------------------------------------------------*/


/*sosyal medya footer*/

if (isset($_POST['footergonder'])) {
	
$kaydet=$baglanti->prepare("UPDATE ayarlar SET

misyon=:misyon,
vizyon=:vizyon  /* 1. veritabanı 2.ayarlar.phpdeki*/
WHERE ayarnumara=2");

$update=$kaydet->execute(array(

'misyon'=>$_POST['misyon'],
'vizyon'=>$_POST['vizyon'] ));

if ($update) {
	header("location:../footeriletisim.php?durum=okey");
}
else{
	header("location:../footeriletisim.php?durum=no");
}

}


/*--------------------------------------------------------------------------*/


/*about yazı ayarları*/

if (isset($_POST['aboutgonder'])) {
	
$kaydet=$baglanti->prepare("UPDATE ayarlar SET

aboutmisyon=:aboutmisyon,
bizkimiz=:bizkimiz,
nasilcalisiriz=:nasilcalisiriz,
sukacagi=:sukacagi,
nedenbiziara=:nedenbiziara  /* 1. veritabanı 2.ayarlar.phpdeki*/
WHERE ayarnumara=2");

$update=$kaydet->execute(array(

'aboutmisyon'=>$_POST['aboutmisyon'],
'bizkimiz'=>$_POST['bizkimiz'],
'nasilcalisiriz'=>$_POST['nasilcalisiriz'],
'sukacagi'=>$_POST['sukacagi'],
'nedenbiziara'=>$_POST['nedenbiziara'] ));

if ($update) {
	header("location:../hakkimizda.php?durum=okey");
}
else{
	header("location:../hakkimizda.php?durum=no");
}

}

/*--------------------------------------------------------------------------*/


/*about yazı ayarları*/

if (isset($_POST['bilgilendirmegonder'])) {
	
$kaydet=$baglanti->prepare("UPDATE ayarlar SET

bilgilendirme=:bilgilendirme  /* 1. veritabanı 2.ayarlar.phpdeki*/
WHERE ayarnumara=2");

$update=$kaydet->execute(array(

'bilgilendirme'=>$_POST['bilgilendirme'] ));

if ($update) {
	header("location:../bilgilendirme.php?durum=okey");
}
else{
	header("location:../bilgilendirme.php?durum=no");
}

}

/*--------------------------------------------------------------------------*/


/*about yazı ayarları*/

if (isset($_POST['ansayfagonder'])) {
	
$kaydet=$baglanti->prepare("UPDATE ayarlar SET
suise=:suise,
724destek=:724destek,
biziarayin=:biziarayin,
sponsorlar=:sponsorlar
WHERE ayarnumara=2");

$update=$kaydet->execute(array(
'suise'=>$_POST['suise'], 
'724destek'=>$_POST['724destek'], 
'biziarayin'=>$_POST['biziarayin'], 
'sponsorlar'=>$_POST['sponsorlar'] ));

if ($update) {
	header("location:../anasayfa.php?durum=okey");
}
else{
	header("location:../anasayfa.php?durum=no");
}

}



