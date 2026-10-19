<?php include __DIR__ . "/assets/project-data/home-projects.php" ?>
<?php include __DIR__ . "/assets/showcase.php" ?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Portfolio van een maker die digitale ervaringen helder, speels en menselijk maakt.">
    <title>Portfolio | Daan Pronk</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script defer src="/assets/javascript/script.js"></script>
</head>

<body>
    <div class="page">
        <main>
            <?php include __DIR__ . "/assets/header.php" ?>
            <header class="hero" id="home">
                <div class="hero-copy">
                    <h2>Daan </h2>
                    <h1>Software Developer</h1>
                    <p class="intro">3ᵉ Jaars student aan het Mediacollege Amsterdam.</p>
                    <div class="hero-actions">
                        <a class="primary-btn" href="#contact">Contact</a>
                        <a class="secondary-btn" href="/projecten">Bekijk mijn werk</a>
                    </div>
                </div>

                <div class="hero-profile">
                    <div class="profile-photo">
                        <img src="/assets/img/selfie-3.jpg" alt="Portret van Daan Pronk">
                    </div>
                    <div class="hero-skills" aria-labelledby="skills-title">
                        <h2 id="skills-title">Skills</h2>
                        <div class="skills-list">
                            <a class="skill-item" href="/projecten?filter=php">PHP</a>
                            <a class="skill-item" href="/projecten?filter=sql">SQL</a>
                            <a class="skill-item" href="/projecten?filter=javascript">JavaScript</a>
                            <a class="skill-item" href="/projecten?filter=cplusplus">C++</a>
                            <a class="skill-item" href="/projecten?filter=laravel">Laravel</a>
                        </div>
                    </div>
                </div>
            </header>
            <section class="section focus-showcase" aria-label="Mijn interesses en projecten">
                <article class="focus-panel" aria-labelledby="backend-title">
                    <h2 id="backend-title">Focus op Backend Development</h2>
                    <p class="focus-description">Ik vind het leuk om aan de achterkant van websites te werken met databases en connecties om te zorgen dat alles goed loopt.</p>
                    <div class="focus-gallery" aria-label="Backendprojecten">
                        <?php foreach ($backendProjectsForShowcase as $project): ?>
                            <a class="focus-photo" href="/project/<?= $project["project_slug"] ?>" aria-label="Bekijk <?= $project["project_name"] ?>">
                                <img src="<?= $project["showcase_image"] ?>" alt="" loading="lazy">
                                <span><?= $project["project_name"] ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <a class="focus-all-link" href="/projecten?filter=backend">Bekijk alle backendprojecten <span aria-hidden="true">↗</span></a>
                </article>
                <article class="focus-panel" aria-labelledby="hardware-title">
                    <h2 id="hardware-title">Mijn passie voor hardware</h2>
                    <p class="focus-description">Ik vind het leuk om aan hardwareprojecten te werken en iets speciaals te creëren dat bruikbaar is en er goed uitziet.</p>
                    <div class="focus-gallery" aria-label="Hardwareprojecten">
                        <?php foreach ($hardwareProjectsForShowcase as $project): ?>
                            <a class="focus-photo" href="/project/<?= $project["project_slug"] ?>" aria-label="Bekijk <?= $project["project_name"] ?>">
                                <img src="<?= $project["showcase_image"] ?>" alt="" loading="lazy">
                                <span><?= $project["project_name"] ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <a class="focus-all-link" href="/projecten?filter=hardware">Bekijk alle hardwareprojecten <span aria-hidden="true">↗</span></a>
                </article>
            </section>
            <section class="section projects-page" id="projecten">
                <div class="section-head">
                    <h2>Beste projecten</h2>
                </div>
                <div class="projects-grid">
                    <?php include __DIR__ . "/assets/cards/project-card.php" ?>
                </div>

                <div class="projects-footer">
                    <a class="primary-btn" href="/projecten">Bekijk meer projecten ↗</a>
                </div>
            </section>

            <?php include __DIR__ . "/assets/footer.php" ?>

        </main>
    </div>
</body>

</html>