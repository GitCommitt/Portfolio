<?php
$project = [
    'project_name' => 'React Project',
    'project_img' => ['src' => '/assets/img/project-img/react/1-react.jpg', 'type' => 'photo'],
    'project_gallery' => [
        ['src' => '/assets/img/project-img/react/2-react.jpg', 'type' => 'photo'],
        ['src' => '/assets/img/project-img/react/3-react.jpg', 'type' => 'photo']
    ],
    'project_cat' => ['React', 'JavaScript', 'CSS Modules'],
    'project_desc' => 'Een interactief project ontwikkeld om de kern van React en modern JavaScript onder de knie te krijgen. Het project bevat diverse werkende componenten, waaronder een cookieclicker-game met state-management en een API-integratie voor het dynamisch ophalen en tonen van externe data. Daarnaast is er gebruikgemaakt van modulaire CSS voor het overzichtelijk stylen van de componenten.',
    'project_github' => 'https://github.com/GitCommitt/React-M7',
    'show_live' => 'block',
    'project_live' => '/react-projects/index.html'
];

include __DIR__ . '/project-detail.php';