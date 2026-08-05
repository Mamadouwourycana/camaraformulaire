<?php
session_start();

if (!isset($_SESSION['auteurs'])) {

    $_SESSION['auteurs'] = [
        [
            "id" => 1,
            "prenom" => "Victor",
            "nom" => "Hugo"
        ],

        [
            "id" => 2,
            "prenom" => "Albert",
            "nom" => "Camus"
        ],

        [
            "id" => 3,
            "prenom" => "Mariama",
            "nom" => "Bâ"
        ]
    ];
}

if (!isset($_SESSION['categories'])) {

    $_SESSION['categories'] = [
        [
            "id"=>1,
            "nom"=>"Roman"
        ],
        [
            "id"=>2,
            "nom"=>"Science"
        ]
    ];
}


if (!isset($_SESSION['livres'])) {

    $_SESSION['livres'] = [
        [
            "id"=>1,
            "titre"=>"Les Misérables",
            "categorie"=>1,
            "auteur"=>1,
            "annee"=>1862,
            "pages"=>1200,
            "disponible"=>"Oui"
        ]
    ];
}

?>