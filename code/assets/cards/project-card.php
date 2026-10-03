<?php
require_once __DIR__ . '/../project-media.php';

foreach ($projects as $project):
    $projectTypes = array_map('strtolower', $project['project_type']);
    ?>
    <article class="project-card" data-category="<?= implode('|', array_unique($projectTypes))?>">
        <div class="card-image">
            <?= renderProjectMedia($project['project_img'], $project['project_name']) ?>
        </div>
        <div class="card-content">
            <div class="card-tags">
                <?php foreach ($project['project_cat'] as $cat): ?>
                    <span><?= $cat ?></span>
                <?php endforeach; ?>
            </div>
            <h3><?= $project['project_name'] ?></h3>
            <p><?= $project['project_desc'] ?></p>
            <div class="card-actions">
                <a class="btn-card" href="/project/<?= $project['project_slug'] ?>">
                    Info <span>↗</span>
                </a>
                <a target="_blank" class="btn-card secondary" href="<?= $project['project_github'] ?>">
                    GitHub <span>↗</span>
                </a>
            </div>
        </div>
    </article>
<?php endforeach; ?>