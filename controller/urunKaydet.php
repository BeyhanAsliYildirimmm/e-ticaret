<?php 

include "../modal/UrunModal.php";
$urunModal = new UrunModal();

global $urunModal;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["urunResmi"])) {
    $dosya = $_FILES["urunResmi"]; // "urunResmi" input field'ından gelen dosyayı al

    // Dosya hakkında bilgi al
    $dosyaAdi = $dosya["name"]; // Dosyanın orijinal adı
    $urun=array(
        "urunAdi"=>$_POST['urunAdi'],
        "urunDetay"=>$_POST['urunDetay'],
        "fiyat"=>$_POST['fiyat'],
        "urunResmi"=> $dosyaAdi
      
    );

    $result=$urunModal->urunKaydet($urun);
    if ($result) {
        echo "Ürün başarıyla kaydedildi.";
    } else {
        echo "Ürün kaydedilemedi.";
    }
    
}

?>