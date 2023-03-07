<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="<?= site_url(''); ?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?= base_url('assets/img/Politeknik_Caltex_Riau.png') ?>" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="<?= site_url(''); ?>">Beranda</a></li>
        <li class="dropdown"><a href="#pendaftaran"><span>Pendaftaran</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="index-3.html">Panduan Pendaftaran</a></li>
              <li><a href="index-4.html">Program Studi</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= site_url('tes'); ?>">Tes Kecocokan Jurusan</a></li>
          <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="<?= site_url('login'); ?>">Login</a>

    </div>
  </header><!-- End Header -->