<?php
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $project['project_desc'] ?>">
    <title><?= $project['project_name'] ?> | Daan Pronk</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php include __DIR__ . "/../../assets/header.php" ?>

    <main class="project-detail">
        <a class="back-link" href="/project-page/projects.php">← Alle projecten</a>

        <section class="project-detail-hero">
            <div class="project-detail-copy">
                <div class="card-tags">
                    <?php foreach ($project['project_cat'] as $category): ?>
                        <span><?= $category?></span>
                    <?php endforeach; ?>
                </div>
                <h1><?= $project['project_name'] ?></h1>
                <p class="project-detail-intro"><?= $project['project_desc'] ?></p>
                <div class="project-detail-actions">
                    <a class="primary-btn" href="<?= $project['project_github']?>">Bekijk op GitHub ↗</a>
                </div>
            </div>
            <div class="project-detail-image">
                <img src="<?= $project['project_img']?>">
            </div>
        </section>

        <section class="project-detail-info">
            <div>
                <p class="section-kicker">Over dit project</p>
                <h2>Wat ik heb gemaakt</h2>
            </div>
            <div class="project-detail-text">
                <p><?= $project['project_desc'] ?></p>
                <p>Bekijk de code en de technische uitwerking op GitHub voor meer details over het proces, de keuzes en het resultaat.</p>
            </div>
        </section>
    </main>

    <?php include __DIR__ . "/../../assets/footer.php" ?>
</body>

</html>
