<?php
$project = [
    'project_name' => 'Amsterdam Museum',
    'project_img' => '/assets/img/project-img/muse/1-muse.jpg',
    'project_gallery' => [
        '/assets/img/project-img/muse/2-muse.png',
        '/assets/img/project-img/muse/3-muse.png'
    ],
    'project_cat' => ['PHP', 'html-css'],
    "project_desc"   => "In dit project wordt samengewerkt door meerdere opleidingen: Media vormgeving en Software Development. Het doel van dit project is om voor de opdrachtgever, het Amsterdam Muse Museum, een installatie te bouwen met een softwarecomponent. Daarin mochten we onze eigen ideeën verwerken. Wij hebben ervoor gekozen om NFC-tags te gebruiken. Ons onderwerp was protest op de Dam. Het team Media vormgeving heeft een platform gebouwd waarop 3D-geprinte poppetjes protesteren die protest borden vasthouden. Op de borden is een NFC-tag geplakt die verwijst naar een deelonderwerp van het hoofdonderwerp. Bij het installeren van de NFC-tags op de bordjes zijn de websites met een Flipper Zero naar de NFC-tags geschreven. Er zijn vijf verschillende websites gebouwd, met op elke website een ander deelonderwerp. Iedereen is individueel aan de slag gegaan met een eigen onderwerp. Op elke website zit een interactief onderdeel om meer over het onderwerp te leren.",
    'project_github' => 'https://github.com/GitCommitt/Muse-Museum-M8',
    'show_live' => 'block',
    'project_live' => 'https://38427.hosts2.ma-cloud.nl/muse/portal.php'
];

include __DIR__ . '/project-detail.php';
