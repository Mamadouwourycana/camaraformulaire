<?php
require 'data.php';

function getAuteur($id)
{
    foreach ($_SESSION['auteurs'] as $auteur) {
        if ($auteur['id'] == $id) {
            return $auteur['prenom'] . " " . $auteur['nom'];
        }
    }
    return "Inconnu";
}

function getCategorie($id)
{
    foreach ($_SESSION['categories'] as $categorie) {
        if ($categorie['id'] == $id) {
            return $categorie['nom'];
        }
    }
    return "Inconnue";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des livres</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php include 'nav.php'; ?>

<h2>Liste des livres</h2>

<table border="1" cellpadding="8">

    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Catégorie</th>
        <th>Auteur</th>
        <th>Année</th>
        <th>Pages</th>
        <th>Disponible</th>
    </tr>

    <?php foreach ($_SESSION['livres'] as $livre) { ?>

    <tr>
        <td><?= $livre['id']; ?></td>
        <td><?= $livre['titre']; ?></td>
        <td><?= getCategorie($livre['categorie']); ?></td>
        <td><?= getAuteur($livre['auteur']); ?></td>
        <td><?= $livre['annee']; ?></td>
        <td><?= $livre['pages']; ?></td>
        <td><?= $livre['disponible']; ?></td>
    </tr>

    <?php } ?>

</table>

</body>
</html>