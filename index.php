<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio van een maker die digitale ervaringen helder, speels en menselijk maakt.">
    <title>Portfolio | Daan Pronk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <main>
            <nav class="topbar" aria-label="Hoofdnavigatie">
                <div class="nav-pill">
                    <a href="#home">Home</a>
                    <a href="#werk">Projects</a>
                    <a href="#contact">About</a>
                    <span class="nav-badge">✦</span>
                </div>
            </nav>
            <header class="hero" id="home">
                <div class="hero-copy">
                    <h1>Software Developer</h1>
                    <p class="intro">Media College 4e jaars student.</p>
                    <div class="hero-actions">
                        <a class="primary-btn" href="#contact">Contact</a>
                        <a class="secondary-btn" href="#werk">Bekijk mijn werk</a>
                    </div>
                </div>

                <div class="profile-photo">
                    <img src="img/selfie.jpg" alt="Portret van Daan Pronk">
                </div>
            </header>
            <section class="section" id="werk">
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

            <section class="section" id="iot-projecten">
                <div class="section-head">
                    <div>
                        <h2>Diverse projecten</h2>
                    </div>
                </div>
                <div class="iot-grid">
                    <article class="iot-card">
                        <div class="iot-photo">
                            <img src="img/project-img/jukebox.jpg" alt="De interactieve jukebox">
                        </div>
                        <h3>Jukebox</h3>
                        <p>Interactieve jukebox die de muziek baseerd op gekleurden munten.</p>
                        <a class="project-button" href="https://github.com/GitCommitt/DP-Jukebox" target="_blank" rel="noopener noreferrer">Go to project <span>↗</span></a>
                        <div class="iot-meta"><span>Arduino / sensor / Geluid</span><span>2026</span></div>
                    </article>
                    <article class="iot-card">
                        <div class="iot-photo">
                            <img src="img/project-img/zweden.jpg" alt="Het Zweden X Netherlands project">
                        </div>
                        <h3>Zweden X Netherlands</h3>
                        <p>Internationeel project samenwerken met zweedse school.</p>
                        <a class="project-button" href="https://github.com/GitCommitt/Zweden-Project" target="_blank" rel="noopener noreferrer">Go to project <span>↗</span></a>
                        <div class="iot-meta"><span>Website / Internationaal / PHP</span><span>2026</span></div>
                    </article>
                    <article class="iot-card">
                        <div class="iot-photo">
                            <img src="img/project-img/t-shirt.jpg" alt="Een Laravel project">
                        </div>
                        <h3>Laravel mini Projects</h3>
                        <p>Kleine laravel projecten met een groot laravel project.</p>
                        <a class="project-button" href="https://github.com/GitCommitt/Laravel-M8" target="_blank" rel="noopener noreferrer">Go to project <span>↗</span></a>
                        <div class="iot-meta"><span>Website / Laravel / Projects</span><span>2026</span></div>
                    </article>
                    <article class="iot-card">
                        <div class="iot-photo">
                            <img src="img/project-img/react.jpg" alt="Een React project">
                        </div>
                        <h3>React mini Project</h3>
                        <p>Kleine laravel projecten met een groot laravel project.</p>
                        <a class="project-button" href="https://github.com/GitCommitt/React-M7" target="_blank" rel="noopener noreferrer">Go to project <span>↗</span></a>
                        <div class="iot-meta"><span>Website / React / Projects</span><span>2026</span></div>
                    </article>
                </div>
            </section>

            <section class="section contact" id="contact">
                <div>
                    <h2>Meer projecten<br>op mijn github</h2>
                </div>
                <div class="contact-links">
                    <a class="contact-link" href="https://github.com/GitCommitt" target="_blank" rel="noopener noreferrer">
                        <span>GitHub</span>
                        <span>↗</span>
                    </a>
                    <a class="contact-link" href="https://www.linkedin.com/in/jouw-naam" target="_blank" rel="noopener noreferrer">
                        <span>LinkedIn</span>
                        <span>↗</span>
                    </a>
                    <a style="width: 100px;" class="contact-link" href="mailto:daanpronk570@gmail.com">
                        <span>Daanpronk570@gmail.com</span>
                        <span>→</span>
                    </a>
                </div>
            </section>

            <footer>
                <span>© 2026 — Daan Pronk</span>
            </footer>
        </main>
    </div>
</body>
</html>