<?php include __DIR__ . "/assets/project-data/home-projects.php" ?>

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
                    <h2>Daan Pronk</h2>
                    <h1>Software Developer</h1>
                    <p class="intro">3de Jaars student aan het Media College.</p>
                    <div class="hero-actions">
                        <a class="primary-btn" href="#contact">Contact</a>
                        <a class="secondary-btn" href="#projecten">Bekijk mijn werk</a>
                    </div>
                </div>

                <div class="hero-profile">
                    <div class="profile-photo">
                        <img src="/assets/img/selfie-3.jpg" alt="Portret van Daan Pronk">
                    </div>
                    <div class="hero-skills" aria-labelledby="skills-title">
                        <h2 id="skills-title">Mijn vaardigheden</h2>
                        <div class="skills-list">
                            <a class="skill-item" href="/projecten?filter=html-css">HTML & CSS</a>
                            <a class="skill-item" href="/projecten?filter=javascript">JavaScript</a>
                            <a class="skill-item" href="/projecten?filter=php">PHP</a>
                            <a class="skill-item" href="/projecten?filter=cplusplus">C++</a>
                            <a class="skill-item" href="/projecten?filter=laravel">Laravel</a>
                            <a class="skill-item" href="/projecten?filter=react">React</a>
                            <a class="skill-item" href="/projecten?filter=sql">SQL</a>
                            <a class="skill-item" href="/projecten?filter=yaml">YAML</a>
                            <a class="skill-item" href="/projecten?filter=all">Git</a>
                        </div>
                    </div>
                </div>
            </header>
            <section class="section">
                <div class="section-head">
                    <div>
                        <h2>Recent werk</h2>
                    </div>
                </div>
                <div class="project-list">
                    <?php include __DIR__ . "/assets/cards/recent-werk-card.php" ?>
                </div>
            </section>
            <section class="section" id="projecten">
                <div class="section-head">
                    <h2>Beste projecten</h2>
                    <div class="filter-bar">
                        <button class="filter-btn active" data-filter="all">Alles</button>
                        <button class="filter-btn" data-filter="web">Web & Apps</button>
                        <button class="filter-btn" data-filter="iot">IoT & HW</button>
                    </div>
                </div>

                <div class="projects-grid">
                    <?php include __DIR__ . "/assets/cards/project-card.php" ?>
                </div>

                <div class="projects-footer">
                    <a class="primary-btn" href="/projecten">Bekijk meer projecten ↗</a>
                </div>
            </section>

            <section class="section contact" id="contact">
                <div>
                        <h2>Meer projecten<br>op mijn GitHub</h2>
                </div>
                <div class="contact-links">
                    <a target="_blank" class="contact-link" href="https://github.com/GitCommitt">
                        <span>GitHub</span>
                        <span>↗</span>
                    </a>
                    <a class="contact-link" href="https://www.linkedin.com/in/jouw-naam">
                        <span>LinkedIn</span>
                        <span>↗</span>
                    </a>
                    <a style="width: 100%;" class="contact-link" href="mailto:daanpronk570@gmail.com">
                        <span>Daanpronk570@gmail.com</span>
                        <span>→</span>
                    </a>
                </div>
            </section>

            <?php include __DIR__ . "/assets/footer.php" ?>
            
        </main>
    </div>
</body>

</html>