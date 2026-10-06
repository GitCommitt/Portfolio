<?php

function projectMediaType($media)
{
    if (is_array($media) && strtolower($media['type'] ?? 'photo') === 'video') {
        return 'video';
    }

    return 'photo';
}

function renderProjectMedia($media, $alt = '', $class = '')
{
    $source = is_array($media) ? ($media['src'] ?? '') : $media;
    $source = htmlspecialchars($source, ENT_QUOTES, 'UTF-8');
    $classAttribute = $class === '' ? '' : ' class="' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8') . '"';

    if (projectMediaType($media) === 'video') {
        $isCardVideo = strpos($class, 'project-card-video') !== false;

        if ($isCardVideo) {
            return '<video class="project-card-video" muted autoplay loop playsinline preload="auto" disablepictureinpicture controlslist="nodownload noplaybackrate nofullscreen"><source src="' . $source . '"></video>';
        }

        return '<video' . $classAttribute . ' controls playsinline preload="metadata"><source src="' . $source . '"></video>';
    }

    return '<img' . $classAttribute . ' src="' . $source . '" alt="' . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . '">';
}
