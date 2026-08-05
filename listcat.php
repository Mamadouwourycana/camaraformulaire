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

<h2>Liste des catégories</h2>

<table>

<tr>
<th>ID</th>
<th>Nom</th>
</tr>

<?php foreach($_SESSION['categories'] as $categorie){ ?>

<tr>
<td><?= $categorie['id'] ?></td>
<td><?= $categorie['nom'] ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>