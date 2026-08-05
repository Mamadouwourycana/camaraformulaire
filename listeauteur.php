<?php
require 'data.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>Ajouter auteur</title>
<link rel="stylesheet" href="style.css">
</head>


<body>

<?php include 'nav.php'; ?>


<h2>Ajouter un auteur</h2>


<form action="traitementajout.php" method="post">

<input 
type="text"
name="prenom"
placeholder="Prénom"
required>


<input 
type="text"
name="nom"
placeholder="Nom"
required>


<button type="submit">
Ajouter
</button>


</form>


</body>
</html>