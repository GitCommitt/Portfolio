<?php
$project = [
    "project_name"   => "Macropad 4x4",
    "project_img"    => "/assets/img/project-img/macropad-4x4/1-macropad-4x4.jpg",
    "project_gallery" => [
        "/assets/img/project-img/macropad-4x4/2-macropad-4x4.jpg",
        "/assets/img/project-img/macropad-4x4/3-macropad-4x4.jpg"
    ],
    "project_cat"    => ["Yaml", "EspHome", "Esp32"],
    "project_desc"   => "Dit is een zelf gemaakte 3D print project. Het werkt met een esp32 en kan je koppellen aan ESPHome op Homeassistant waar je automations aan elke knop kan toegoegen",
    "project_github" => "https://github.com/GitCommitt/ESPHome-Projects/tree/main/MacroPad",
    "show_live" => "none",
    "project_live" => ""
];

include __DIR__ . '/project-detail.php';
