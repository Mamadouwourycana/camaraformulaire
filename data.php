<?php
session_start();

if (!isset($_SESSION['categories'])) {
    $_SESSION['categories'] = [
        ["id"=>1,"nom"=>"Roman"],
        ["id"=>2,"nom"=>"Informatique"],
        ["id"=>3,"nom"=>"Science"]
    ];
}

if (!isset($_SESSION['auteurs'])) {
    $_SESSION['auteurs'] = [
        ["id"=>1,"prenom"=>"Victor","nom"=>"Hugo"],
        ["id"=>2,"prenom"=>"Molière","nom"=>""],
        ["id"=>3,"prenom"=>"Albert","nom"=>"Camus"]
    ];
}

if (!isset($_SESSION['livres'])) {
    $_SESSION['livres'] = [
        [
            "id"=>1,
            "titre"=>"Les Misérables",
            "categorie"=>1,
            "auteur"=>1
        ],
        [
            "id"=>2,
            "titre"=>"Le Mythe de Sisyphe",
            "categorie"=>3,
            "auteur"=>3
        ]
    ];
}
?>