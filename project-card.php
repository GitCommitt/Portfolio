<?php

$projects = [
    [
        "project_name"   => "Jukebox",
        "project_slug"   => "jukebox",
        "project_type"   => "iot",
        "project_img"    => "/img/project-img/jukebox.jpg",
        "project_cat"    => ["Arduino", "Sensoren", "Audio"],
        "project_desc"   => "Een fysieke jukebox die muziekselecties maakt op basis van de kleur van ingeworpen munten.",
        "project_github" => "https://github.com/GitCommitt/DP-Jukebox"
    ],
    [
        "project_name"   => "Zweden × Nederland",
        "project_slug"   => "zweden-nederland",
        "project_type"   => "web",
        "project_img"    => "/img/project-img/zweden.jpg",
        "project_cat"    => ["PHP", "Internationaal"],
        "project_desc"   => "Internationale samenwerking en platformontwikkeling met studenten van een Zweedse partnerschool.",
        "project_github" => "https://github.com/GitCommitt/Zweden-Project"
    ],
    [
        "project_name"   => "Laravel Projecten",
        "project_slug"   => "laravel-projecten",
        "project_type"   => "web",
        "project_img"    => "/img/project-img/t-shirt.jpg",
        "project_cat"    => ["Laravel", "PHP"],
        "project_desc"   => "Een verzameling van mini-applicaties gebundeld in één overkoepelend Laravel-platform.",
        "project_github" => "https://github.com/GitCommitt/Laravel-M8"
    ],
    [
        "project_name"   => "React Projecten",
        "project_slug"   => "react-projecten",
        "project_type"   => "web",
        "project_img"    => "/img/project-img/react.jpg",
        "project_cat"    => ["React", "JavaScript"],
        "project_desc"   => "Onderzoek en realisatie van dynamische front-end componenten en dashboards met React.",
        "project_github" => "https://github.com/GitCommitt/React-M7"
    ]
];

foreach ($projects as $project): ?>
    <article class="project-card" data-category="<?= $project['project_type'] ?>">
        <div class="card-image">
            <img src="<?= $project['project_img'] ?>">
            <span class="card-badge">2026</span>
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
                <a class="btn-card" href="/project-page/projecten/<?= $project['project_slug'] ?>.php">
                    Info <span>↗</span>
                </a>
                <a class="btn-card secondary" href="<?= $project['project_github'] ?>">
                    GitHub <span>↗</span>
                </a>
            </div>
        </div>
    </article>
<?php endforeach; ?>