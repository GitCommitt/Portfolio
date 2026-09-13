<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Portfolio van een maker die digitale ervaringen helder, speels en menselijk maakt.">
    <title>Portfolio | Daan Pronk</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>

<body>
    <div class="page">
        <main>
            <?php include("header.php") ?>
            <header class="hero" id="home">
                <div class="hero-copy">
                    <h1>Software Developer</h1>
                    <p class="intro">Media College 4e jaars student.</p>
                    <div class="hero-actions">
                        <a class="primary-btn" href="#contact">Contact</a>
                        <a class="secondary-btn" href="#projecten">Bekijk mijn werk</a>
                    </div>
                </div>

                <div class="profile-photo">
                    <img src="img/selfie.jpg" alt="Portret van Daan Pronk">
                </div>
            </header>
            <section class="section">
                <div class="section-head">
                    <div>
                        <h2>recent werk</h2>
                    </div>
                </div>
                <div class="project-list">
                    <a class="project" href="https://github.com/ghostbusterbob/SpaceYugis">
                        <span class="project-number">01</span>
                        <span class="project-title">Arcade Game & IOT</span>
                        <span class="project-type">Game — IOT</span>
                        <span class="project-arrow">↗</span>
                    </a>
                    <a class="project" href="https://github.com/GitCommitt/Muse-Museum-M8">
                        <span class="project-number">02</span>
                        <span class="project-title">Amsterdam Muse Museum</span>
                        <span class="project-type">IOT — 3D</span>
                        <span class="project-arrow">↗</span>
                    </a>
                    <a class="project" href="https://github.com/GitCommitt/ESPHome-Projects">
                        <span class="project-number">03</span>
                        <span class="project-title">ESPHome Projects</span>
                        <span class="project-type">IOT — ESP32</span>
                        <span class="project-arrow">↗</span>
                    </a>
                </div>
            </section>
            <section class="section" id="projecten">
                <div class="section-head">
                    <h2>Projecten</h2>
                    <div class="filter-bar">
                        <button class="filter-btn active" data-filter="all">Alles</button>
                        <button class="filter-btn" data-filter="web">Web & Apps</button>
                        <button class="filter-btn" data-filter="iot">IoT & HW</button>
                    </div>
                </div>

                <div class="projects-grid">
                    <?php include("project-card.php") ?>
                </div>

                <div class="projects-footer">
                    <a class="primary-btn" href="/project-page/projects.php">Bekijk meer projecten ↗</a>
                </div>
            </section>

            <section class="section contact" id="contact">
                <div>
                    <h2>Meer projecten<br>op mijn github</h2>
                </div>
                <div class="contact-links">
                    <a class="contact-link" href="https://github.com/GitCommitt" target="_blank"
                        rel="noopener noreferrer">
                        <span>GitHub</span>
                        <span>↗</span>
                    </a>
                    <a class="contact-link" href="https://www.linkedin.com/in/jouw-naam" target="_blank"
                        rel="noopener noreferrer">
                        <span>LinkedIn</span>
                        <span>↗</span>
                    </a>
                    <a style="width: 100%;" class="contact-link" href="mailto:daanpronk570@gmail.com">
                        <span>Daanpronk570@gmail.com</span>
                        <span>→</span>
                    </a>
                </div>
            </section>

            <footer>
                <span>2026 — Daan Pronk</span>
            </footer>
        </main>
    </div>
</body>

</html>