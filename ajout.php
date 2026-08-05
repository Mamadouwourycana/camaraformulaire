<?php
require 'data.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

<?php include 'nav.php'; ?>

<form action="traitementajout.php" method="post">

<h2>Ajouter un auteur</h2>

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