<?php
try {
    $baglanti = new PDO('mysql:host=localhost;dbname=project', 'root', '');
 
 
} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>