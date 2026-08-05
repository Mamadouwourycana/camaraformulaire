<?php

require 'data.php';


$nouvelId = count($_SESSION['auteurs']) + 1;


$_SESSION['auteurs'][] = [

    "id"=>$nouvelId,

    "prenom"=>$_POST['prenom'],

    "nom"=>$_POST['nom']

];

?>