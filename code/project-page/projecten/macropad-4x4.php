<?php
$project = [
    "project_name"   => "Macropad 4x4",
    "project_img"    => ["src" => "/assets/img/project-img/macropad-4x4/1-macropad-4x4.jpg", "type" => "photo"],
    "project_gallery" => [
        ["src" => "/assets/img/project-img/macropad-4x4/2-macropad-4x4.jpg", "type" => "photo"],
        ["src" => "/assets/img/project-img/macropad-4x4/3-macropad-4x4.jpg", "type" => "photo"]
    ],
    "project_cat"    => ["YAML", "ESPHome", "ESP32-S3"],
    "project_desc"   => "Een custom hardware-macropad aangedreven door een ESP32-S3 Mini microcontroller. Het apparaat is via ESPHome en Wi-Fi gekoppeld aan Home Assistant voor het direct aanroepen van slimme automatiseringen. Daarnaast is de controller te programmeren om via Bluetooth verbinding te maken met een computer, waardoor deze ook kan gebruik worden als fysieke mediacontroller.",
    "project_github" => "https://github.com/GitCommitt/ESPHome-Projects/tree/main/MacroPad",
    "show_live" => "none",
    "project_live" => ""
];

include __DIR__ . '/project-detail.php';