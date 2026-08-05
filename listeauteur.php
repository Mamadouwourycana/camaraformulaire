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

<h2>Liste des auteurs</h2>

<table>

<tr>
<th>ID</th>
<th>Prénom</th>
<th>Nom</th>
</tr>

<?php foreach($_SESSION['auteurs'] as $auteur){ ?>

<tr>
<td><?= $auteur['id'] ?></td>
<td><?= $auteur['prenom'] ?></td>
<td><?= $auteur['nom'] ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>