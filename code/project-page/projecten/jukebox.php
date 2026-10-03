<?php
$project = [
    'project_name' => 'Jukebox',
    'project_img' => ['src' => '/assets/img/project-img/jukebox/1-jukebox.jpg', 'type' => 'photo'],
    'project_gallery' => [
        ['src' => '/assets/img/project-img/jukebox/2-jukebox.jpg', 'type' => 'photo'],
        ['src' => '/assets/img/project-img/jukebox/3-jukebox.jpg', 'type' => 'photo']
    ],
    'project_cat' => ['Arduino', 'Sensoren', 'Audio'],
    'project_desc' => 'Een 3D-gemodelleerde jukebox die muziek maakt op basis van de kleur van ingeworpen munten. Voor dit project is een Arduino Nano gebruikt, omdat er veel data- en stroomverbindingen nodig zijn en de Arduino Nano veel pinnen heeft die kunnen worden uitgelezen. Het model is zelf gemaakt in Blender. De jukebox heeft veel functies. Je kunt kiezen uit drie soorten gekleurde munten, waarbij elke kleur voor een andere artiest staat. Aan de achterkant zit een aan-uitknop en je kunt het volume regelen. De verlichting verandert automatisch mee met de kleur van de munt. Wanneer de jukebox in idle modus staat, geeft hij alle kleuren van de regenboog weer.',
    'project_github' => 'https://github.com/GitCommitt/DP-Jukebox',
    'show_live' => 'none',
    'project_live' => ''
];

include __DIR__ . '/project-detail.php';
