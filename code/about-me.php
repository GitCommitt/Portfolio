<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Portfolio van een maker die digitale ervaringen helder, speels en menselijk maakt.">
    <title>Over mij | Daan Pronk</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.20.0/matter.min.js"></script>
    <script defer src="/assets/javascript/script.js"></script>
</head>

<body class="about-page">
    <div class="page">
        <main>
            <?php include __DIR__ . "/assets/header.php" ?>

            <header class="about-hero">
                <div class="about-intro">
                    <h1>Info over mij</h1>
                    <p class="intro">Mijn naam is Daan Pronk en software is mijn passie. Of het nu gaat om het schrijven van code, het solderen van componenten of het lezen van documentatie: ik wil altijd weten hoe de techniek achter de schermen werkt. Naast deze zelfstandige focus werk ik ontzettend graag in teamverband. Ik geniet ervan om samen ideeën te bedenken, creativiteit te bundelen en de leiding te nemen. Met goede communicatie zorg ik ervoor dat alles vlekkeloos verloopt.</p>
                    <div class="hero-actions">
                        <a class="primary-btn" href="mailto:daanpronk570@gmail.com">Stuur een bericht <span aria-hidden="true">↗</span></a>
                        <a class="secondary-btn" href="/assets/cv/CV-Daan_Pronk.pdf" download>Download mijn CV ↓</a>
                    </div>
                </div>
                <div class="about-portrait">
                    <div class="about-portrait-image">
                        <img class="about-rotating-image" src="/assets/img/selfie-1.jpg" alt="Portret van Daan Pronk">
                    </div>
                    <div class="about-portrait-meta">
                        <span>Amsterdam, NL</span>
                    </div>
                </div>
            </header>

            <section class="section about-hobbies">
                <div class="section-head">
                    <h2>Mijn hobby's</h2>
                </div>
                <div class="about-points">
                    <article class="about-point">
                        <h3>Code schrijven</h3>
                        <p>Van een eerste idee tot een werkende website of applicatie. Ik vind het leuk om oplossingen te bouwen.</p>
                    </article>
                    <article class="about-point">
                        <h3>Solderen</h3>
                        <p>Ik ontdek graag hoe software en hardware samenkomen door zelf componenten te bouwen en te testen.</p>
                    </article>
                    <article class="about-point">
                        <h3>Documentatie lezen</h3>
                        <p>Ik lees graag documentatie om te begrijpen hoe soft/hardware achter de schermen werkt en hoe ik die goed kan toepassen.</p>
                    </article>
                </div>
            </section>

            <section class="section about-skills" aria-labelledby="about-skills-title">
                <div class="section-head">
                    <h2 id="about-skills-title">Mijn Skills</h2>
                </div>
                <div class="skills-list">
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/apache/D22128" alt="" aria-hidden="true" draggable="true">Apache</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/react/61DAFB" alt="" aria-hidden="true" draggable="true">React</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/php/777BB4" alt="" aria-hidden="true" draggable="true">PHP</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/linux/FCC624" alt="" aria-hidden="true" draggable="true">Linux</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/laravel/FF2D20" alt="" aria-hidden="true" draggable="true">Laravel</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/mysql/4479A1" alt="" aria-hidden="true" draggable="true">SQL</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/homeassistant/18BCF2" alt="" aria-hidden="true" draggable="true">Home Assistant</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/css/E34F26" alt="" aria-hidden="true" draggable="true"> CSS</button>
                    <button type="button" class="skill-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/windows8/windows8-original.svg" alt="" aria-hidden="true" draggable="true">Windows</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/flutter/02569B" alt="" aria-hidden="true" draggable="true">Flutter</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/mariadb/003545" alt="" aria-hidden="true" draggable="true">MariaDB</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/dart/0175C2" alt="" aria-hidden="true" draggable="true">Dart</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/html5/E34F26" alt="" aria-hidden="true" draggable="true">HTML</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/nginx/009639" alt="" aria-hidden="true" draggable="true">Nginx</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/wordpress/21759B" alt="" aria-hidden="true" draggable="true">WordPress</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/cplusplus/00599C" alt="" aria-hidden="true" draggable="true">C++</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/git/F05032" alt="" aria-hidden="true" draggable="true">Git</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/mysql/4479A1" alt="" aria-hidden="true" draggable="true">MySQL</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/yaml/CB171E" alt="" aria-hidden="true" draggable="true">YAML</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/raspberrypi/C51A4A" alt="" aria-hidden="true" draggable="true">Raspberry Pi</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/javascript/F7DF1E" alt="" aria-hidden="true" draggable="true">JavaScript</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/phpmyadmin/6C78AF" alt="" aria-hidden="true" draggable="true">phpMyAdmin</button>
                    <button type="button" class="skill-item"><img src="https://cdn.simpleicons.org/dotenv/ECD53F" alt="" aria-hidden="true" draggable="true">.env</button>
                </div>
            </section>

            <?php include __DIR__ . "/assets/footer.php" ?>
            
        </main>
    </div>
</body>

</html>