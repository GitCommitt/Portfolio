<?php
$project = [
    'project_name' => 'Zweden × Nederland',
    'project_img' => ['src' => '/assets/img/project-img/zweden/1-zweden.jpg', 'type' => 'photo'],
    'project_gallery' => [
        ['src' => '/assets/img/project-img/zweden/2-zweden.jpg', 'type' => 'photo'],
        ['src' => '/assets/img/project-img/zweden/3-zweden.jpg', 'type' => 'photo']
    ],
    'project_cat' => ['PHP', 'Internationaal', 'Samenwerking'],
    'project_desc' => 'Een internationaal samenwerkingsproject tussen Nederlandse en Zweedse studenten van de opleidingen Software Development, Game Development en Game Art. Als Software Development team waren wij verantwoordelijk voor het ontwikkelen van het centrale webplatform. Dit platform bundelt en presenteert de door het team gemaakte games, gecombineerd met achtergrondinformatie over de uitwisseling. Het traject duurde zes maanden, inclusief een intensieve sprintmaand en uitwisselingen tussen Amsterdam en Stockholm waarbij op locatie werd samengewerkt.',
    'project_github' => 'https://github.com/GitCommitt/Zweden-Project',
    'show_live' => 'block',
    'project_live' => '/swe-nld/index.php'
];

include __DIR__ . '/project-detail.php';