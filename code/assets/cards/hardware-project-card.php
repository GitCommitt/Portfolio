<?php

require_once __DIR__ . '/../project-data/hardware-projects.php';

foreach ($hardwareProjects as $hardwareProject): ?>
    <a class="project" href="/project/<?= $hardwareProject["project_slug"] ?>">
        <img class="project-thumbnail" src="<?= $hardwareProject["project_img"]["src"] ?>" alt="" loading="lazy">
        <span class="project-title"><?= $hardwareProject["project_name"] ?></span>
        <span class="project-description"><?= $hardwareProject["project_desc"] ?></span>
        <span class="project-arrow">↗</span>
    </a>
<?php endforeach; ?>