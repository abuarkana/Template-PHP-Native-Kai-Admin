<?php
require_once __DIR__ . '/../config/config.php';

view('layouts/app', [
    'title' => 'Dashboard',
    'content' => 'dashboard/dashboard',
    'active_menu' => 'dashboard'
]);
?>