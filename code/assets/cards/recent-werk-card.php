<?php

$recentWerk = [
    [
        "number" => "01",
        "project_name" => "Arcadegame & IoT",
        "project_tags" => ["Game", "IoT"],
        "project_github" => "https://github.com/ghostbusterbob/SpaceYugis"
    ],
    [
        "number" => "02",
        "project_name" => "Amsterdam Museum",
        "project_tags" => ["IoT", "3D"],
        "project_github" => "https://github.com/GitCommitt/Muse-Museum-M8"
    ],
    [
        "number" => "03",
        "project_name" => "ESPHome Projects",
        "project_tags" => ["IoT", "ESP32"],
        "project_github" => "https://github.com/GitCommitt/ESPHome-Projects"
    ]
];

foreach ($recentWerk as $rWerk): ?>
    <a target="_blank" class="project" href="<?= $rWerk["project_github"] ?>">
        <span class="project-number"><?= $rWerk["number"] ?></span>
        <span class="project-title"><?= $rWerk["project_name"] ?></span>
        <span class="card-tags">
            <?php foreach ($rWerk["project_tags"] as $tags):?>
            <span><?= $tags ?></span>
             <?php endforeach;?></span>
        <span class="project-arrow">↗</span>
    </a>
<?php endforeach; ?>