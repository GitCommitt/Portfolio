<?php
$project = [
    "project_name"   => "Credit Shop",
    "project_img"    => ["src" => "/assets/img/project-img/credit-shop/1-credit-shop.jpg", "type" => "photo"],
    "project_gallery" => [
        ["src" => "/assets/img/project-img/credit-shop/2-credit-shop.jpg", "type" => "photo"],
        ["src" => "/assets/img/project-img/credit-shop/3-credit-shop.jpg", "type" => "photo"]
    ],
    "project_cat"    => ["html-css", "JavaScript", "Cache"],
    "project_desc"   => "In dit project is een een webshop gecreeerd met een admin panel. Op de webshop kan je producten toevoegen aan het winkelmandje en vanuit daar de product bestellen. Je kan meerdere producten bestellen binnen een bestelling. De bestelingen kunnen beheerd worden in het admin paneel waar bij gehouden kan worden hoeveel de bestelling heeft gekost. Ook zijn de producten te beheren via het admin paneel en is elk component aanpasbaar van het product.",
    "project_github" => "https://github.com/GitCommitt/credit-shop",
    "show_live" => "block",
    "project_live" => "/credit-shop/index.php"
];

include __DIR__ . '/project-detail.php';
