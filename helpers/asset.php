<?php
function asset($path) {
    // Deteksi protocol (http atau https)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    
    // Ambil domain dari server
    $domain = $_SERVER['HTTP_HOST'];
    
    // Gabungkan untuk membuat base URL
    $baseUrl = $protocol . $domain;
    
    return rtrim($baseUrl, '/') . '/assets/' . ltrim($path, '/');
}

