<?php
require_once 'bddConnect.php';
$id = $_GET['id'];
$produit="SELECT product.id, product.name, brand.name, category.name, price, gender 
FROM brand, category 
INNER JOIN category 
ON category_id = category.id
INNER JOIN brand
ON brand_id = brand.id
AND product.id ='$id'";
