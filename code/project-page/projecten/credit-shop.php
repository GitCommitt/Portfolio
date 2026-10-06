<?php
$project = [
    "project_name"   => "Credit Shop",
    "project_img"    => ["src" => "/assets/img/project-img/credit-shop/1-credit-shop.jpg", "type" => "photo"],
    "project_gallery" => [
        ["src" => "/assets/img/project-img/credit-shop/2-credit-shop.jpg", "type" => "photo"],
        ["src" => "/assets/img/project-img/credit-shop/3-credit-shop.jpg", "type" => "photo"]
    ],
    "project_cat"    => ["PHP", "JavaScript", "Admin Panel"],
    "project_desc"   => "Een webshop gebouwd met een admin-panel voor het beheren van producten en bestellingen. Bezoekers kunnen meerdere producten toevoegen aan hun winkelmand en in één keer bestellen. Via het admin-panel worden alle bestellingen met de bijbehorende kosten bijgehouden, en kunnen producten en hun eigenschappen eenvoudig worden aangepast.",
    "project_github" => "https://github.com/GitCommitt/credit-shop",
    "show_live" => "block",
    "project_live" => "/credit-shop/index.php"
];

include __DIR__ . '/project-detail.php';