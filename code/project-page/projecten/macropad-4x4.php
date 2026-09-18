<?php
$project = [
    "project_name"   => "Macropad 4x4",
    "project_img"    => "/assets/img/project-img/macropad-4x4/1-macropad-4x4.jpg",
    "project_gallery" => [
        "/assets/img/project-img/macropad-4x4/2-macropad-4x4.jpg",
        "/assets/img/project-img/macropad-4x4/3-macropad-4x4.jpg"
    ],
    "project_cat"    => ["YAML", "ESPHome", "ESP32"],
    "project_desc"   => "In dit project is een macropad gebouwd waarmee je via Home Assistant automatiseringen kunt aanroepen. Je kunt het macropad ook met eigen code via Bluetooth aan je computer koppelen en bijvoorbeeld als mediacontroller gebruiken. Er zijn vier schakelaars die de automatiseringen aanroepen. Deze schakelaars zijn gekoppeld aan een ESP32-S3 Mini, het brein van het macropad. De microcontroller stuurt alles aan en is verbonden met het thuisnetwerk, waardoor hij contact kan maken met Home Assistant.",
    "project_github" => "https://github.com/GitCommitt/ESPHome-Projects/tree/main/MacroPad",
    "show_live" => "none",
    "project_live" => ""
];

include __DIR__ . '/project-detail.php';
