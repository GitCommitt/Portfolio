<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Portfolio van een maker die digitale ervaringen helder, speels en menselijk maakt.">
    <title>Over mij | Daan Pronk</title>
    <link rel="stylesheet" href="/assets/css/style.css">
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

            <?php include __DIR__ . "/assets/footer.php" ?>
            
        </main>
    </div>
</body>

</html>