<?php
$project = [
    "project_name"   => "Music Library",
    "project_img"    => ["src" => "/assets/img/project-img/music-library/1-music-library.jpg", "type" => "photo"],
    "project_gallery" => [
        ["src" => "/assets/img/project-img/music-library/2-music-library.jpg", "type" => "photo"],
        ["src" => "/assets/img/project-img/music-library/3-music-library.jpg", "type" => "photo"]
    ],
    "project_cat"    => ["PHP", "SQL", "Bootstrap"],
    "project_desc"   => "Een online muziekbibliotheek gekoppeld aan een SQL-database. De hoofdpagina toont overzichtelijk alle opgeslagen albums met behulp van specifieke databasequeries. Gebruikers kunnen via een ingebouwde zoekfunctie gericht door de collectie navigeren en specifieke albums opzoeken. De responsive interface is opgebouwd met Bootstrap.",
    'project_github' => 'https://github.com/GitCommitt/Music-Library',
    "show_live" => "none",
    "project_live" => ""
];

include __DIR__ . '/project-detail.php';