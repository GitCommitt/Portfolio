<?php
$project = [
    "project_name"   => "Duurzaam huis",
    "project_img"    => "/assets/img/project-img/duurzaam-huis/1-duurzaam-huis.jpg",
    "project_gallery" => [
        "/assets/img/project-img/duurzaam-huis/2-duurzaam-huis.jpg",
        "/assets/img/project-img/duurzaam-huis/3-duurzaam-huis.jpg"
    ],
    "project_cat"    => ["Arduino", "Sensoren", "PHP"],
    "project_desc"   => "Dit is een van mijn eerste projecten waarin ik met een Arduino heb gewerkt. Het was ook de eerste keer dat ik met PHP werkte. Bij dit project was het de bedoeling om van een leeg houten huisje een slim en duurzaam huis te maken. Hiervoor zijn meerdere hardwarecomponenten gebruikt: een LDR-sensor, DHT-sensor, ledlamp en NFC-tag. Al deze componenten communiceren met een zelfgemaakte webserver. Zo kun je bijvoorbeeld via de website een lampje aan- en uitzetten. Ook is er een NFC Tagg toegevoegd aan bij het logo, dus bij het scannen van het logo word je doorgeleid naar de website.",
    "project_github" => "https://github.com/GitCommitt/Duurzaam-Huis",
    "show_live" => "block",
    "project_live" => "https://38427.hosts2.ma-cloud.nl/greenflow/"
];

include __DIR__ . '/project-detail.php';
