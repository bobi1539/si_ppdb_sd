<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <!-- <img width="100" class="mr-lg-3" src="<?php echo base_url('assets/img/beranda/logo.png') ?>" alt="logo.png"> -->

    <a class="navbar-brand" href="#">SI PPDB SD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item <?php echo ($aktif == 'beranda' ? 'active' : '') ?>">
          <a class="nav-link" href="<?php echo base_url() ?>">Beranda</a>
        </li>
        <!-- <li class="nav-item <?php echo ($aktif == 'fitur' ? 'active' : '') ?>">
          <a class="nav-link" href="<?php echo base_url('beranda/fitur') ?>">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li> -->
        <!-- <?php if ($this->session->userdata('username')) : ?>
          <?php if ($this->session->userdata('level') == 'admin') : ?>
            <li class="nav-item <?php echo ($aktif == 'my_akun' ? 'active' : '') ?>">
              <a class="nav-link" href="<?php echo base_url('admin') ?>">My Akun</a>
            </li>
          <?php else : ?>
            <li class="nav-item <?php echo ($aktif == 'my_akun' ? 'active' : '') ?>">
              <a class="nav-link" href="<?php echo base_url('user') ?>">My Akun</a>
            </li>
          <?php endif; ?>
        <?php else : ?> -->
        <li class="nav-item <?php echo ($aktif == 'login' ? 'active' : '') ?>">
          <a class="nav-link" href="<?php echo base_url('login') ?>">Login</a>
        </li>
      <?php endif ?>
      </ul>
    </div>
  </div>
</nav>