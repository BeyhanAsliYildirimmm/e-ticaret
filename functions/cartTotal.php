<?php 

function cartTotal($products) {
    
    //Sepetin Hesaplanması
    $total_price = 0.0;
    $total_count = 0;
    foreach ($products as $product) {
        //her bir ürüne attribute ekliyoruz.
        $product->total_price = $product->count * $product->price;
    //sepetdeki toplam miktar.
        $total_price = $total_price + $product->total_price;
        //sepetdeki toplam ürün.
        $total_count += $product->count;
    }

   $summary["total_price"] = $total_price;
   $summary["total_count"] = $total_count;

 

   $_SESSION["shoppingCart"]["products"] = $products;
   $_SESSION["shoppingCart"]["summary"]  = $summary;

   return true;
}

?>