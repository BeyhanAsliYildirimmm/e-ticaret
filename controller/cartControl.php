<?php
include "../modal/db.php";
include "../functions/cartTotal.php";
session_start();

function addToCart ($product_item){
  //SEPETE EKLEME FONK.

    /* 
    *Sepeti SESSION da tutucaz
    * browser da başka bir sayfaya geçtiğimizde sepetimizin aktif olaması lazım.
    */
 

    /*SESSION DA 2 TANE ARRAY TUTUTCAZ

      1.ÜRÜN LİSTESİ
      2.SEPETTEKİ ÜRÜNLERİN LİSTESİ
    */

    if(isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];
    }
    else{
        $products = array();
    }

    //Ürün Adet Kontrolü...
    //products'in de $product_item->id'i varsa count'u +1
    if(array_key_exists($product_item->id,$products)){
        $products[$product_item->id]->count++;
    }
    else{
        $products[$product_item->id] = $product_item;
    }

    cartTotal($products);
   
}


function removeFromCart($product_id){
   
    //Sepetten Sile işlemi
    $products=$_SESSION['shoppingCart']['products'];

    //Ürünü Listeden Çıkar.
    if(array_key_exists($product_id,$products)){
        unset($products[$product_id]);
    }

    //Tekrardan Sepeti Hesapla
    cartTotal($products);

 

}
function inCount($product_id){

}
function decCount($product_id){

}
//AddToCart
/**
 * 
 * urun id al 
 * cart.db dosyasına post et
 * veritabanından ürünün bilgilerini al
 * SESSION'daki sepete ekle
 * Sepeti tekrardan hesapla
 * 
 */

 if(isset($_POST["p"])){

    $islem = $_POST["p"];
    if($islem == "addToCart"){
        $id = $_POST["product_id"];
        $product = $db->query("SELECT * FROM products WHERE id={$id}", PDO::FETCH_OBJ)->fetch();
        $product->count = 1;
       echo addToCart($product);
    }
    else if ($islem == "removeCartBtn"){
    $product_id=$_POST['product_id'];
    echo removeFromCart($product_id);

    }

   
 }
?>