<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <!-- <img width="100" class="mr-lg-3" src="<?php echo base_url('assets/img/beranda/logo.png') ?>" alt="logo.png"> -->

    <a class="navbar-brand" href="#">SI PPDB SD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item <?php echo ($aktif == 'pendaftaran' ? 'active' : '') ?>">
          <a class="nav-link" href="<?php echo base_url() ?>">Pendaftaran</a>
        </li>
        <li class="nav-item <?php echo ($aktif == 'login' ? 'active' : '') ?>">
          <a class="nav-link" href="<?php echo base_url('login') ?>">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>