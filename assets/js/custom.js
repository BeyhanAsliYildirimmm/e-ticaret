$(document).ready(function(){

    $(".addToCartBtn").click(function(){
        var url = "http://localhost:8080/alisverisSepeti/controller/cartControl.php";
        var data = {
        p:"addToCart",
        product_id:$(this).attr("product-id")
        }
        $.post(url,data,function(response){
            alert(response);
         $(".cart-count").text(response);
        })
    })
});