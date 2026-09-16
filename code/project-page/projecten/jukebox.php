<?php
$project = [
    'project_name' => 'Jukebox',
    'project_img' => '/assets/img/project-img/jukebox/1-jukebox.jpg',
    'project_gallery' => [
        '/assets/img/project-img/jukebox/2-jukebox.jpg',
        '/assets/img/project-img/jukebox/3-jukebox.jpg'
    ],
    'project_cat' => ['Arduino', 'Sensoren', 'Audio'],
    'project_desc' => 'Een fysieke jukebox die muziekselecties maakt op basis van de kleur van ingeworpen munten.',
    'project_github' => 'https://github.com/GitCommitt/DP-Jukebox',
    'show_live' => 'none',
    'project_live' => ''
];

include __DIR__ . '/project-detail.php';
