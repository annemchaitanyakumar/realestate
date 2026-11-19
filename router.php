<?php
// Built-in PHP server router for clean URLs and static asset handling
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = __DIR__ . $uri;

// 1. If physical file exists (CSS, JS, images, etc.), let PHP server deliver it directly
if ($uri !== '/' && file_exists($path) && !is_dir($path)) {
    return false;
}

// 2. Check for matching PHP script (e.g. /aboutus -> /aboutus.php)
$route = trim($uri, '/');
if (!empty($route)) {
    if (file_exists(__DIR__ . '/' . $route . '.php')) {
        include __DIR__ . '/' . $route . '.php';
        exit;
    }
    if (file_exists(__DIR__ . '/' . $route . '/index.php')) {
        include __DIR__ . '/' . $route . '/index.php';
        exit;
    }
}

// 3. Fallback to homepage
include __DIR__ . '/index.php';
