
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepetim</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../assets/css/custom.css"> 
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../assets/css/footer.css"> 
    <link rel="stylesheet" href="../assets/css/header.css">
    <!-- Bootstrap CSS dosyası bağlantısı -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body>

<?php include_once('../includes/Header.php');

$total_price= 0.0;
$total_count= 0;

if(isset($_SESSION["shoppingCart"]))
{
    $shoppingCart=$_SESSION["shoppingCart"];
    $total_count=$shoppingCart["summary"]["total_count"];
    $total_price=$shoppingCart["summary"]["total_price"];
    $products=$shoppingCart["products"];
}

?>

<div class="container">
    <?php if( $total_count > 0) {?>
         <h2 class="text-center">Sepetinizde <strong class="color-danger">5</strong> Ürün Var</h2>
        <hr>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 ">
        <!--
            table-hover-> üzerine gelince renk değiştirmesi için
            table-bordered-> çizgili olması için
            table-striped-> bir satir farklı renk bir satır farklı renk olması için
        -->
        <table class="table table-hover table-bordered table-striped">
                <thead>
            
                <th class="text-center">Ürün Resmi</th>
                <th class="text-center">Ürün Adı</th>
                <th class="text-center">Fiyat</th>
                <th class="text-center">Adeti</th>
                <th class="text-center">Toplam</th>
                <th class="text-center">Sepetten Çıkar</th>
            
                </thead>
            <tbody>
            <?php 
            
                foreach ($products as $product) { ?>
            
                <tr>
                <td class="text-center" width="120">
                <img src="../assets/images/<?php echo $product->img_url?>" width="50" alt="">
            </td>
                <td class="text-center"><?php echo $product->product_name ?></td>
                <td class="text-center"><strong><?php echo $product->price."TL" ?></strong></td>
                <td class="text-center">
                <a href="#" class="btn btn-xs btn-success">
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
                <input type="text" class="item-count-input" value="<?php echo $product->count ?>" >
                <a href="#" class="btn btn-xs btn-danger">
                    <span class="glyphicon glyphicon-minus"></span>
                </a>
                </td>
                <td class="text-center"><?php echo $product->total_price."TL" ?></td>
                <td class="text-center" width="120">
                <button product-id="<?= $product->id ?>" class="btn btn-danger btn-sm removeFromCartBtn">
                    <span class="glyphicon glyphicon-remove"></span>
                    Sepetten Çıkar
                </button>
                </td>
        
            </tr>
            <?php }?>
        
            </tbody> 

            <tfoot>
                    <th colspan="2" class="text-right">
                    Toplam Ürün: <span class="color-danger"><?php echo $total_count?></span>
                    </th>
                    <th colspan="4" class="text-right">
                    Toplam Tutar: <span class="color-danger"><?php echo $total_price?></span>
                    </th>
            </tfoot>
    
        </table>
    
    </div>

<?php } else { ?>

    <div class="alert alert-info">
        <strong>Sepetinizde Ürün Bulunmamaktadır.</strong>

    </div>
<?php } ?>
</div>

<script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script scr="../assets/js/custom.js"></script>

</body>
</html>