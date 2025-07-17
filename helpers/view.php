<?php  
function view($viewName, $data = []) {
    extract($data);

    // Sanitasi: hanya huruf, angka, garis miring, underscore, dash
    if (!preg_match('/^[a-zA-Z0-9_\/-]+$/', $viewName)) {
        die("View name tidak valid.");
    }

    $path = __DIR__ . '/../views/' . $viewName . '.php';

    if (file_exists($path)) {
        require $path;
    } else {
        echo "View '$viewName' tidak ditemukan.";
    }
}

// Global variabel script stack
$GLOBALS['__script_stack'] = [];

function push_script($script) {
    $GLOBALS['__script_stack'][] = $script;
}

function render_scripts() {
    foreach ($GLOBALS['__script_stack'] as $script) {
        echo $script . "\n";
    }
}
?>