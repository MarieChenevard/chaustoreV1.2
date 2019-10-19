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
    <a class="chaustore" href="index.php"><h4>Chaustore</h4></a>
    <a class="boutonRetour" href="add.php"><img src="retour.png" alt="retour à la page précédente" height=50px width=50px></a>
  </div>

  <h1>Ajoutez une couleur</h1>

<?php

require('bddConnect.php');

if(!empty($_POST ['addColor'])){
  $answer= $_POST['addColor'];
  $ajouter= "INSERT INTO `color`(name)VALUES('$answer')";
  // var_dump($answer);
  mysqli_query($link, $ajouter);
  
 // $bdd->exec("INSERT INTO `color`(name)VALUES('$answer')");
  // var_dump($answer);
}


?>


<div class="listing">

  <form method="POST" action="add_color.php">
    <input class="write" type="text" name="addColor" id="addColor" value="">
    <input class="add" type="submit" name="submit "value="Ajouter !">
  </form>


<?php
$reponse ='SELECT `name` FROM color';
$visualiser= mysqli_query($link, $reponse);
while ($donnees = mysqli_fetch_assoc($visualiser)){
echo $donnees['name'] . '<br />';
}


?>

</div>


</body>
</html>
