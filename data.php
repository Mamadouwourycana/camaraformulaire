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
        ["id"=>3,"prenom"=>"Albert","nom"=>"Camus"],
        ["id"=>4,"prenom"=>"Léopold","nom"=>"Sédar Senghor"],
        ["id"=>5,"prenom"=>"Ousmane","nom"=>"Sembène"],
        ["id"=>6,"prenom"=>"Amadou","nom"=>"Hampâté Bâ"],
        ["id"=>7,"prenom"=>"Mariama","nom"=>"Bâ"]
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
        ],

        [
            "id"=>2,
            "titre"=>"Le Mythe de Sisyphe",
            "categorie"=>3,
            "auteur"=>3,
            "annee"=>1942,
            "pages"=>180,
            "disponible"=>"Oui"
        ],

        [
            "id"=>3,
            "titre"=>"Une si longue lettre",
            "categorie"=>1,
            "auteur"=>7,
            "annee"=>1979,
            "pages"=>165,
            "disponible"=>"Oui"
        ],

        [
            "id"=>4,
            "titre"=>"L'Aventure ambiguë",
            "categorie"=>1,
            "auteur"=>6,
            "annee"=>1961,
            "pages"=>220,
            "disponible"=>"Non"
        ],

        [
            "id"=>5,
            "titre"=>"La Noire de...",
            "categorie"=>1,
            "auteur"=>5,
            "annee"=>1966,
            "pages"=>150,
            "disponible"=>"Oui"
        ]
    ];
}

?>