<?php
require('bddConnect.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Gilda+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Carter+One&display=swap" rel="stylesheet">

</head>

<body>
	<div class="entete">
		<a class="chaustore" href="index.php">
			<h4>Chaustore</h4>
		</a>
	</div>
	<nav>
		<a class="menu" href="product.php">
			<li>Produits</li>
		</a>
		<a class="menu" href="category.php">
			<li>Catégories</li>
		</a>
		<a class="menu" href="brand.php">
			<li>Marques</li>
		</a>
		<a class="menu" href="color.php">
			<li>Couleurs</li>
		</a>
		<a class="menu" href="size.php">
			<li>Tailles</li>
		</a>
	</nav>

	<h1>Gestion de la boutique</h1>

	<h2>Vos produits</h2>


	</form>
	<table>
		<thead>
			<tr>
				<th>Catégorie</th>
				<th>Marque</th>
				<th>Produit</th>
				<th>Couleur</th>
				<th>Genre</th>
				<th>Prix</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
		</thead>
		<?php
		require_once 'product_choice.php';
		while ($product = mysqli_fetch_assoc($productSend)) { ?>

			<tr>
				<th><?php echo $product['catégorie'] ?></th>
				<th><?php echo $product['marque'] ?></th>
				<th><?php echo $product['nom'] ?></th>
				<th><?php echo $product['couleur'] ?></th>
				<th><?php echo $product['genre'] ?></th>
				<th><?php echo $product['price'] ?></th>
				<th>
					<form method="post" action="modifier.php?id=<?php echo $product['id']; ?>">
						<input id="modifier" type="submit" value="Modifier">
					</form>
				</th>
				<th>
					<form method="post" action="supprimer.php?id=<?php echo $product['id']; ?>">
						<input id="supprimer" type="submit" value="Supprimer">
					</form>
				</th>
			</tr>
		<?php } ?>
	</table>
</body>

</html>