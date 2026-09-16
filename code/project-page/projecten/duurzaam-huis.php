<?php
$project = [
    "project_name"   => "Duurzaam huis",
    "project_img"    => "/assets/img/project-img/duurzaam-huis/1-duurzaam-huis.jpg",
    "project_gallery" => [
        "/assets/img/project-img/duurzaam-huis/2-duurzaam-huis.jpg",
        "/assets/img/project-img/duurzaam-huis/3-duurzaam-huis.jpg"
    ],
    "project_cat"    => ["Arduino", "Sensoren", "PHP"],
    "project_desc"   => "Dit is een van de eerste projecten voor mijn waarbij ik heb moeten werken met een arduino. Dit is ook de eerste keer dat ik in aanmerking kom met php. Bij dit project word er data gestuurd vanuit het duurzame huis naar de website. Ook kan het duurzame huis bediend worden via de website waarbij je het lampje aan en uit kan schakelen.",
    "project_github" => "https://github.com/GitCommitt/Duurzaam-Huis",
    "show_live" => "block",
    "project_live" => "https://38427.hosts2.ma-cloud.nl/greenflow/"
];

include __DIR__ . '/project-detail.php';
