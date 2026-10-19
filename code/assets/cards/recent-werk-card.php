<?php

require_once __DIR__ . '/../project-data/recent-project.php';

foreach ($recentWerk as $rWerk): ?>
    <a class="project" href="/project/<?= $rWerk["project_slug"] ?>">
        <span class="project-number"><?= $rWerk["number"] ?></span>
        <span class="project-title"><?= $rWerk["project_name"] ?></span>
        <span class="card-tags">
            <?php foreach ($rWerk["project_tags"] as $tags):?>
            <span><?= $tags ?></span>
             <?php endforeach;?></span>
        <span class="project-arrow">↗</span>
    </a>
<?php endforeach; ?>