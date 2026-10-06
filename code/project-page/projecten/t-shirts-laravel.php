<?php
$project = [
    'project_name' => 'T-shirts Webshop',
    'project_img' => ['src' => '/assets/img/project-img/laravel/1-laravel.jpg', 'type' => 'photo'],
    'project_gallery' => [
        ['src' => '/assets/img/project-img/laravel/2-laravel.jpg', 'type' => 'photo'],
        ['src' => '/assets/img/project-img/laravel/3-laravel.jpg', 'type' => 'photo']
    ],
    'project_cat' => ['Laravel', 'PHP', 'SQL'],
    'project_desc' => 'Een dynamische T-shirt webshop gebouwd met het Laravel framework op basis van de MVC-architectuur. Tijdens dit project lag de nadruk op de fundamenten van backend-development: het opzetten van een gestructureerde database-architectuur, het schrijven van efficiënte SQL-queries en het verbinden van modellen en controllers. Bezoekers kunnen de T-shirts eenvoudig sorteren en filteren op basis van kleur en categorie.',
    'project_github' => 'https://github.com/GitCommitt/Laravel-M8',
    'show_live' => 'none',
    'project_live' => ''
];

include __DIR__ . '/project-detail.php';