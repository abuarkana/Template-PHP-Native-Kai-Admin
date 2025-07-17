<?php
function isActive($active, $expected) {
    return $active === $expected ? 'active' : '';
}
?>

<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <!-- Logo Header -->
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="<?= asset('img/kaiadmin/logo_light.svg') ?>" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Sidebar Content -->
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">

                <!-- Dashboard -->
                <li class="nav-item active">
                    <a  href="#dashboard" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Sidebar Content -->

</div>
<!-- End Sidebar -->
