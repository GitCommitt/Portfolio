<?php
$project = [
    'project_name' => 'RoomUs',
    'project_img' => ['src' => '/assets/img/project-img/roomus/1-roomus.jpg', 'type' => 'photo'],
    'project_gallery' => [
        ['src' => '/assets/img/project-img/roomus/2-roomus.jpg', 'type' => 'photo'],
        ['src' => '/assets/img/project-img/roomus/3-roomus.jpg', 'type' => 'photo']
    ],
    'project_cat' => ['PHP', 'JavaScript', 'CSS'],
    'project_desc' => 'Een herontworpen webplatform ontwikkeld als individuele beroepsopdracht voor een externe opdrachtgever (RoomUs). De verouderde website is van de grond af opnieuw opgebouwd om de navigatie, functionaliteit en gebruikerservaring te moderniseren. Met volledige creatieve vrijheid is een overzichtelijke hub gerealiseerd waarin bedrijfsinformatie en interactieve elementen samenkomen om de online merkidentiteit te professionaliseren.',
    'project_github' => 'https://github.com/GitCommitt/RoomUs',
    'show_live' => 'block',
    'project_live' => '/roomus/index.php'
];

include __DIR__ . '/project-detail.php';