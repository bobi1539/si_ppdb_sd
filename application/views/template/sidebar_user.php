<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php echo ($aktif == 'my_akun') ? 'active' : '' ?>">
            <a class="nav-link " href="<?php echo base_url('user') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Profil</span>
            </a>
        </li>

        <li class="nav-item <?php echo ($aktif == 'data_bantuan') ? 'active' : '' ?>">
            <a class="nav-link " href="<?php echo base_url('user/data_bantuan') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Bantuan</span>
            </a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('login/logout') ?>" onclick="return confirm('Yakin ingin logout?')">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Logout</span>
            </a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">