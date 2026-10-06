<?php
$project = [
    "project_name"   => "Duurzaam huis",
    "project_img"    => ["src" => "/assets/img/project-img/duurzaam-huis/1-duurzaam-huis.jpg", "type" => "photo"],
    "project_gallery" => [
        ["src" => "/assets/img/project-img/duurzaam-huis/2-duurzaam-huis.jpg", "type" => "photo"],
        ["src" => "/assets/img/project-img/duurzaam-huis/3-duurzaam-huis.jpg", "type" => "photo"]
    ],
    "project_cat"    => ["Arduino", "Sensoren", "PHP"],
    "project_desc"   => "Een houten huisje omgebouwd tot een slim en duurzaam huis. Het project draait op een Arduino met sensoren voor licht (LDR) en temperatuur en luchtvochtigheid (DHT). Alles is gekoppeld aan een zelfgebouwde PHP-webserver, waarmee de verlichting live via de website te bedienen is. In het logo zit een NFC-tag verwerkt die bij het scannen direct de webpagina opent.",
    "project_github" => "https://github.com/GitCommitt/Duurzaam-Huis",
    "show_live" => "block",
    "project_live" => "/duurzaam-huis/index.html"
];

include __DIR__ . '/project-detail.php';