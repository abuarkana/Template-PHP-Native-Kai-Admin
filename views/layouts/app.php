<?php  
    // Include akses user jika sudah login di bagian ini seperti session dan lain -lain 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'My App' ?></title>
    <?php view('layouts/head') ?> <!-- Link CSS -->
</head>
<body>
    <div class="wrapper">
        <?php 
            view('layouts/sidebar', [
                'active_menu' => $active_menu,
                'active_submenu' => $active_submenu ?? ''
            ]) 
        ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php view('layouts/navbar') ?> 
            <!-- End Navbar -->
            
            <!-- Content -->
            <?php view($content) ?> <!-- Konten halaman dinamis -->
            <!-- End Content -->

            <!-- Footer -->
            <?php view('layouts/footer') ?> 
            <!-- End Footer -->
        </div>
    </div>
    <!-- script -->
    <?php view('layouts/script') ?>
    <!-- End script -->
</body>
</html>
