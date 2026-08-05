<?php

require 'data.php';

$id = count($_SESSION['auteurs']) + 1;

$_SESSION['auteurs'][] = [

"id"=>$id,

"prenom"=>$_POST['prenom'],

"nom"=>$_POST['nom']

];

header("Location: listeauteurs.php");

exit;

?>