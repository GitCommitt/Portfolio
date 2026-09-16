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
            <div style="margin-top: 40px;" class="card-actions">
                <a class="btn-card" style="display:<?= $project['show_live'] ?>;" href="<?= $project['project_live'] ?>">
                    Link naar Live<span>↗</span>
                </a>
                <a target="_blank" href="<?= $project['project_github'] ?>" class="btn-card secondary">
                    Github<span>↗</span>
                </a>
            </div>
            </div>
            <div class="project-detail-image">
                <a class="project-detail-image-link" href="#project-main-photo">
                    <img src="<?= $project['project_img'] ?>" alt="Foto van <?= $project['project_name'] ?>">
                </a>
                <div class="project-lightbox" id="project-main-photo">
                    <a class="project-lightbox-backdrop" href="#" aria-label="Sluit grote foto"></a>
                    <div class="project-lightbox-content">
                        <a class="project-lightbox-close" href="#" aria-label="Sluit grote foto">&times;</a>
                        <img src="<?= $project['project_img'] ?>" alt="Grote foto van <?= $project['project_name'] ?>">
                    </div>
                </div>
            </div>
            <div class="project-detail-gallery">
                <?php foreach (($project['project_gallery'] ?? [$project['project_img']]) as $galleryIndex => $galleryImage): ?>
                    <a class="project-detail-gallery-link" href="#project-photo-<?= $galleryIndex ?>">
                        <img src="<?= $galleryImage ?>" alt="Foto van <?= $project['project_name'] ?>" loading="lazy">
                    </a>
                    <div class="project-lightbox" id="project-photo-<?= $galleryIndex ?>">
                        <a class="project-lightbox-backdrop" href="#" aria-label="Sluit grote foto"></a>
                        <div class="project-lightbox-content">
                            <a class="project-lightbox-close" href="#" aria-label="Sluit grote foto">&times;</a>
                            <img src="<?= $galleryImage ?>" alt="Grote foto van <?= $project['project_name'] ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
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
