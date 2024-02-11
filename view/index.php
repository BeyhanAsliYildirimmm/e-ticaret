
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alışveriş Sepeti</title>
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
    <!--HEADER------------->
<?php require_once "../controller/shopCotrol.php";?>
<?php require_once "../includes/Header.php"; ?>
<?php require_once "../includes/Slider.php"; ?>
 
 <!--MAIN CONTENT------------->
     <div class="container">
        <h2 class="text-center">Ürün Listesi</h2>
        <hr>
        <div class="row">

            <?php foreach ($products as $product) { ?>
               
                <div class="card mb-3" style="width: 25rem; margin-left: 3rem;">
                    <img class="card-img-top" src="../assets/images/<?php echo $product->img_url ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title fs-5"><a href="#" class="btn fs-5"><?php echo $product->product_name ?></a></h5>
                        <p class="card-text fs-5"><?php echo $product->detail ?></p>
                        <p class="text-right price-container"><strong><?php echo $product->price ?> TL</strong></p>
                        <button product-id = <?php echo $product->id ?> class="btn btn-primary btn-block addToCartBtn" role="button">
                        <span class="glyphicon glyphicon-shopping-cart "></span>Sepete Ekle
                        </button>

                    </div>
                </div>
               
            <?php  } ?>      
            
    
        </div>
    

      
    
    </div>

    <?php require_once "../includes/footer.php"; ?>
  
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script src="../assets/js/custom.js"></script>
</body>
</html>