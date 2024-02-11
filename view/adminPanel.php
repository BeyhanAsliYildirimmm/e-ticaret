<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/urunEkle.css"> 

    <title>Ürün Kayıt Formu</title>
</head>
<body>

<h2>Ürün Kayıt Formu</h2>

<form action="../controller/urunKaydet.php" method="post" enctype="multipart/form-data">
    <label for="urunAdi">Ürün Adı:</label><br>
    <input type="text" id="urunAdi" name="urunAdi" required><br><br>
    
    <label for="urunResmi">Ürün Resmi:</label><br>
    <input type="file" id="urunResmi" name="urunResmi" accept="image/*" required><br><br>
    
    <label for="urunDetay">Ürün Detay Bilgisi:</label><br>
    <textarea id="urunDetay" name="urunDetay" rows="4" cols="50" required></textarea><br><br>
    
    <label for="fiyat">Fiyat (₺):</label><br>
    <input type="number" id="fiyat" name="fiyat" step="0.01" required><br><br>
    
    <input type="submit" value="Ürünü Kaydet">
</form> 

</body>
</html>
