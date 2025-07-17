<?php  
function base_path($path = '') {
    return rtrim(__DIR__ . '/../', '/') . ($path ? '/' . ltrim($path, '/') : '');
}
?>