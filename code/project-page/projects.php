<?php include __DIR__ . "/../assets/project-data/projecten.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecten | Daan Pronk</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script defer src="/assets/javascript/script.js"></script>
</head>

<body>
    <?php include __DIR__ . "/../assets/header.php" ?>
        <section class="section" id="projecten" style="border-top: 0px solid var(--line);">
            <div class="section-head" style="display: flex; flex-direction:column; align-items:center; ">
                <h2>Projecten</h2>
                <div class="filter-bar" style="margin-top: 20px;">
                            <button class="filter-btn active" data-filter="all">Alles</button>
                            <button class="filter-btn" data-filter="php">PHP</button>
                            <button class="filter-btn" data-filter="cplusplus">C++</button>
                            <button class="filter-btn" data-filter="laravel">Laravel</button>
                            <button class="filter-btn" data-filter="react">React</button>
                            <button style="display: none;" class="filter-btn" data-filter="html-css">HTML & CSS</button>
                            <button style="display: none;" class="filter-btn" data-filter="javascript">JavaScript</button>
                            <button style="display: none;" class="filter-btn" data-filter="sql">SQL</button>
                            <button style="display: none;" class="filter-btn" data-filter="yaml">YAML</button>
                        </div>
                        <br>
                <div class="projects-grid" style="border-top: 1px solid var(--line); padding: 72px 0;">
                    <?php include __DIR__ . "/../assets/cards/project-card.php" ?>
                </div>
            </div>
        </section>
    <?php include __DIR__ . "/../assets/footer.php" ?>
</body>

</html>