<?php
$project = [
    'project_name' => 'T-shirts Laravel',
    'project_img' => ['src' => '/assets/img/project-img/laravel/1-laravel.jpg', 'type' => 'photo'],
    'project_gallery' => [
        ['src' => '/assets/img/project-img/laravel/2-laravel.jpg', 'type' => 'photo'],
        ['src' => '/assets/img/project-img/laravel/3-laravel.jpg', 'type' => 'photo']
    ],
    'project_cat' => ['Laravel', 'PHP', 'SQL'],
    'project_desc' => 'Dit project is een samenvoeging van meerdere kleine projecten om Laravel beter te leren kennen. Daarnaast bevat het een groot project waarin een T-shirtwebsite is gebouwd die gegevens uit de database haalt en weergeeft. In dit project is ook gebruikgemaakt van de mogelijkheden van SQL, zoals het sorteren van T-shirts. In de miniprojecten kom je vooral kleine functies tegen, zoals het gebruiken van een database met Laravel en modellen en controllers.',
    'project_github' => 'https://github.com/GitCommitt/Laravel-M8',
    'show_live' => 'none',
    'project_live' => ''
];

include __DIR__ . '/project-detail.php';
