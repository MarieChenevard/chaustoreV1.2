<?php
$productReq = 'SELECT category.name AS catégorie, brand.name AS marque, product.name AS nom, 
color.name AS couleur, gender AS genre, price AS price, product.id 
FROM product 
INNER JOIN category 
ON category_id = category.id
INNER JOIN brand
ON brand_id = brand.id
INNER JOIN color
ON color_id = color.id';

$productSend = mysqli_query($link, $productReq);