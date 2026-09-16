<?php
$project = [
    'project_name' => 'Amsterdam Muse Museum',
    'project_img' => '/assets/img/project-img/muse/1-muse.jpg',
    'project_gallery' => [
        '/assets/img/project-img/muse/2-muse.png',
        '/assets/img/project-img/muse/3-muse.png'
    ],
    'project_cat' => ['PHP', 'html-css'],
    "project_desc"   => "In dit project word er samengewerkt met meerdere opledingen, Media Vormgeving en Software Developer. Het doel van dit project is voor de opdrachtgever (eigenaar van het Amsterdam Muse Mueseum) een installatie te bouwen waarbij er een software kant inbegrepen moet zijn hiervoor mag je je eigen ingeving geven. Wij hebben er voor gekozen om NFC Tags te gebruiken. Ons onderwerp was Protest op de dam. Het Media Vormgever team heeft ervoor gekozen om een platform te bouwen waar er 3d geprinte poppejtes aan het protesteren zijn en op de borden is de NFC Tagg geplakt aan de hand van het deel onderwerp van het grote onderwerp. Bij het installeren van de NfC Tags aan de bordjes zijn de websites gewrite op de NFC Tags met een Flipper Zero. Er zijn 5 verschillende websites gebouwd waarin elk een ander deel onderwerp te zien is die we hebben bedacht. Iedereen is individueel aan de slag gegaan met zijn eigen onderwerp. In elke website moet een interactief deel in zitten om meer te leren over het onderwerp.",
    'project_github' => 'https://github.com/GitCommitt/Muse-Museum-M8',
    'show_live' => 'block',
    'project_live' => 'https://38427.hosts2.ma-cloud.nl/muse/portal.php'
];

include __DIR__ . '/project-detail.php';
