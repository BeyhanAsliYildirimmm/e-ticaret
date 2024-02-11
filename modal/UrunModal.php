<?php 
include 'db.php';

class UrunModal {
   
    public function urunKaydet($urunBilgisi) {
        global $db;

        $sorgu = $db->prepare("INSERT INTO products (product_name, detail, price, img_url) VALUES (?, ?, ?, ?)");
        $success = $sorgu->execute([$urunBilgisi['urunAdi'], $urunBilgisi['urunDetay'], $urunBilgisi['fiyat'], $urunBilgisi['urunResmi']]);
       if($success)
       {
        echo "vöcxvö";
       }
        return $success;
    }
}


?>
