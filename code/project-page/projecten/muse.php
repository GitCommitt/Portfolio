<?php
$project = [
    'project_name' => 'Amsterdam Museum',
    'project_img' => ['src' => '/assets/img/project-img/muse/1-muse.jpg', 'type' => 'photo'],
    'project_gallery' => [
        ['src' => '/assets/img/project-img/muse/2-muse.png', 'type' => 'photo'],
        ['src' => '/assets/img/project-img/muse/3-muse.png', 'type' => 'photo']
    ],
    'project_cat' => ['PHP', 'NFC', 'Samenwerking'],
    'project_desc' => 'Een project in opdracht van het Amsterdam Museum rondom het thema \'Protest op de Dam\'. In samenwerking met de opleiding Media Vormgeving is een fysieke installatie gebouwd met 3D-geprinte demonstranten. Elk protestbord bevat een NFC-tag (geprogrammeerd met een Flipper Zero) die linkt naar een specifiek deelonderwerp. Elk van de vijf teamleden heeft hierbij een eigen website gecreëerd voor een specifiek deelonderwerp, waarop bezoekers via interactieve elementen meer over het thema leren.',
    'project_github' => 'https://github.com/GitCommitt/Muse-Museum-Amsterdam',
    'show_live' => 'block',
    'project_live' => '/muse/portal.php'
];

include __DIR__ . '/project-detail.php';