<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <!-- <i class="fas fa-laugh-wink"></i> -->
            </div>
            <div class="sidebar-brand-text mx-3">SI PPDB SD</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item <?php echo $aktif == 'data_user' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url('data_user') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data User</span>
            </a>
        </li>
        <li class="nav-item <?php echo $aktif == 'data_berita' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url('data_berita') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Berita</span>
            </a>
        </li>
        <li class="nav-item <?php echo $aktif == 'data_pendidikan' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url('data_pendidikan') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Pendidikan</span>
            </a>
        </li>
        <li class="nav-item <?php echo $aktif == 'data_pekerjaan' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url('data_pekerjaan') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Pekerjaan</span>
            </a>
        </li>
        <li class="nav-item <?php echo $aktif == 'data_provinsi' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url('data_provinsi') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Provinsi</span>
            </a>
        </li>
        <li class="nav-item <?php echo $aktif == 'data_kabupaten' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url('data_kabupaten') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Kabupaten</span>
            </a>
        </li>
        <li class="nav-item <?php echo $aktif == 'data_kecamatan' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url('data_kecamatan') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Kecamatan</span>
            </a>
        </li>
        <li class="nav-item <?php echo $aktif == 'data_kelurahan' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url('data_kelurahan') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Kelurahan</span>
            </a>
        </li>
        <li class="nav-item <?php echo $aktif == 'data_agama' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url('data_agama') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Agama</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php echo $this->session->userdata('nm_user') ?>
                            </span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">