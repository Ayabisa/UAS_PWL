<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?= base_url()?>NiceRestaurant/assets/img/logo.webp" alt=""> -->
        <i class="bi bi-fork-knife"></i>
        <h1 class="sitename">LenaHouse</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <a href="<?= site_url('/') ?>">Home</a>
          <a href="<?= site_url('produk') ?>">Produk</a>
          <a href="<?= site_url('keranjang') ?>">Keranjang</a>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- Profile dropdown -->
    <div class="dropdown">
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="<?= base_url()?>img/profile/daniele.jpg" alt="Profile" class="rounded-circle img-fluid" style="width: 32px; height: 32px;">
        <span class="d-none d-md-block dropdown-toggle ps-2">
          <?= session()->get('username'); ?> (<?= session()->get('role'); ?>)
        </span>
      </a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li>
          <a class="dropdown-item d-flex align-items-center" href="logout">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- End Profile dropdown -->   
    </div>
  </header>