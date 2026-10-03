<?php
require_once __DIR__ . '/../../assets/project-media.php';
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
        <a class="back-link" href="/projecten">← Alle projecten</a>

        <section class="project-detail-hero">
            <div class="project-detail-copy">
                <div class="card-tags">
                    <?php foreach ($project['project_cat'] as $category): ?>
                        <span><?= $category ?></span>
                    <?php endforeach; ?>
                </div>

                <h1><?= $project['project_name'] ?></h1>

                <p class="section-kicker">Over dit project</p>

                <div class="project-detail-text">
                    <p><?= $project['project_desc'] ?></p>
                    <p>Bekijk de code en de technische uitwerking op GitHub voor meer details over het proces, de keuzes en het resultaat.</p>
                </div>

                <div class="card-actions">
                    <a target="_blank" class="btn-card" style="display:<?= $project['show_live'] ?>;" href="<?= $project['project_live'] ?>">
                        Bekijk de liveversie<span>↗</span>
                    </a>
                    <a target="_blank" href="<?= $project['project_github'] ?>" class="btn-card secondary">
                        GitHub<span>↗</span>
                    </a>
                </div>
            </div>

            <div class="project-detail-visuals">
                <div class="project-detail-image">
                    <?php if (projectMediaType($project['project_img']) === 'video'): ?>
                        <?= renderProjectMedia($project['project_img'], $project['project_name']) ?>
                    <?php else: ?>
                        <a class="project-detail-image-link" href="#project-main-photo">
                            <?= renderProjectMedia($project['project_img'], 'Foto van ' . $project['project_name']) ?>
                        </a>
                        <div class="project-lightbox" id="project-main-photo">
                            <a class="project-lightbox-backdrop" href="#" aria-label="Sluit grote foto"></a>
                            <div class="project-lightbox-content">
                                <a class="project-lightbox-close" href="#" aria-label="Sluit grote foto">&times;</a>
                                <?= renderProjectMedia($project['project_img'], 'Grote foto van ' . $project['project_name']) ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="project-detail-gallery">
                    <?php foreach (($project['project_gallery'] ?? [$project['project_img']]) as $galleryIndex => $galleryMedia): ?>
                        <?php if (projectMediaType($galleryMedia) === 'video'): ?>
                            <div class="project-detail-gallery-link">
                                <?= renderProjectMedia($galleryMedia, $project['project_name']) ?>
                            </div>
                        <?php else: ?>
                            <a class="project-detail-gallery-link" href="#project-photo-<?= $galleryIndex ?>">
                                <?= renderProjectMedia($galleryMedia, 'Foto van ' . $project['project_name']) ?>
                            </a>
                            <div class="project-lightbox" id="project-photo-<?= $galleryIndex ?>">
                                <a class="project-lightbox-backdrop" href="#" aria-label="Sluit grote foto"></a>
                                <div class="project-lightbox-content">
                                    <a class="project-lightbox-close" href="#" aria-label="Sluit grote foto">&times;</a>
                                    <?= renderProjectMedia($galleryMedia, 'Grote foto van ' . $project['project_name']) ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . "/../../assets/footer.php" ?>
</body>

</html>
