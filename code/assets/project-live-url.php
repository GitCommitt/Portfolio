<?php

function projectLiveUrl(string $subdomain): string
{
    $host = strtolower($_SERVER['HTTP_HOST'] ?? '');
    $host = preg_replace('/:\d+$/', '', $host);
    $domain = in_array($host, ['daanpronk.nl', 'www.daanpronk.nl'], true)
        ? 'daanpronk.nl'
        : 'daanpronk.com';

    return "https://{$subdomain}.{$domain}";
}