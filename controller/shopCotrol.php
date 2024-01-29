<?php 
include_once('../modal/db.php');

/*******Verileri Çekme İşlemi **************/

$products = $db->query("SELECT * FROM products",PDO::FETCH_OBJ)->fetchAll();
 
?>