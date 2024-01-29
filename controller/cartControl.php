<?php
include "../modal/db.php";


function addToCart ($product_item){

    /* Sepeti SESSION da tutucaz
    * browser da başka bir sayfaya geçtiğimizde sepetimizin aktif olaması lazım
    */
    session_start();
    if(isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];
    }
    else{
        $products = array();
    }

//Ürün Adet Kontrolü...
if(array_key_exists($product_item->id,$products)){
    $products[$product_item->id]->count++;
}
else{
    $products[$product_item->id] = $product_item;
}

//Sepetin Hesaplanması
$total_price = 0.0;
$total_count = 0;
foreach ($products as $product) {
    $product->total_price = $product->count * $product->price;
    $total_price = $total_price + $product->total_price;
    $total_count += $product->count;
}

   $summary["total_price"] = $total_price;
   $summary["total_count"] = $total_count;

 

   $_SESSION["shoppingCart"]["products"] = $products;
   $_SESSION["shoppingCart"]["summary"]  = $summary;

   return $total_count;
}
function removeFromCart($product_id){

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
    else if ($islem == "removeFromCart"){

    }

   
 }
?>