<?php
$showcaseProjects = static function () {
    include __DIR__ . "/project-data/projecten.php";
    return $projects;
};
$allProjectsForShowcase = $showcaseProjects();
$showcaseImages = require __DIR__ . "/project-data/showcase-projects.php";
$projectsBySlug = array_column($allProjectsForShowcase, null, "project_slug");
$getShowcaseProjects = static function ($images) use ($projectsBySlug) {
    $showcaseProjects = [];
    foreach ($images as $slug => $image) {
        if (!isset($projectsBySlug[$slug])) {
            throw new UnexpectedValueException("Showcase project '{$slug}' is missing from the project catalog.");
        }
        $project = $projectsBySlug[$slug];
        $project["showcase_image"] = $image;
        $showcaseProjects[] = $project;
    }
    return $showcaseProjects;
};
$backendProjectsForShowcase = $getShowcaseProjects($showcaseImages["backend"]);
$hardwareProjectsForShowcase = $getShowcaseProjects($showcaseImages["hardware"]);
?>