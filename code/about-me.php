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

            <section class="section contact" id="contact">
                <div>
                    <h2>Meer projecten<br>op mijn GitHub</h2>
                </div>
                <div class="contact-links">
                    <a class="contact-link" href="https://github.com/GitCommitt">
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