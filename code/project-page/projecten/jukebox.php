<?php
$project = [
    'project_name' => 'Jukebox',
    'project_img' => ['src' => '/assets/img/project-img/jukebox/1-jukebox.mp4', 'type' => 'video'],
    'project_gallery' => [
        ['src' => '/assets/img/project-img/jukebox/2-jukebox.jpg', 'type' => 'photo'],
        ['src' => '/assets/img/project-img/jukebox/3-jukebox.jpg', 'type' => 'photo']
    ],
    'project_cat' => ['Arduino', 'Sensoren', 'Audio'],
    'project_desc' => 'Een interactieve, custom 3D-gemodelleerde jukebox ontworpen in Blender en aangedreven door een Arduino Nano. Het apparaat speelt muziek af op basis van de kleur van ingeworpen munten, waarbij elke kleur gekoppeld is aan een specifieke artiest. De ingebouwde RGB-verlichting past zich aan op de gekozen munt en schakelt in idle-modus over naar een regenboogeffect. Verder is de jukebox voorzien van fysieke volumeregeling en een aan-uitknop.',
    'project_github' => 'https://github.com/GitCommitt/DP-Jukebox',
    'show_live' => 'none',
    'project_live' => ''
];

include __DIR__ . '/project-detail.php';