<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashData('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<section id="produk" class="section" style="padding-top: 10px;">
  <div class="container" data-aos="fade-up">
    <div class="section-title text-center mb-4">
      <h2>Our Authentic Indonesian Food by Lena House</h2>
      <p>Kami Menyajikan Makanan Indonesia yang beragam dari Daerah Local Indonesia</p>
    </div>

    <!-- Grid produk -->
    <div class="row justify-content-center">
      <?php foreach ($produk as $item): ?>
        <div class="col-md-4 col-sm-6 mb-4">
          <?= form_open('cart') ?>
          <?= form_hidden('id', $item['id']) ?>
          <?= form_hidden('nama', $item['nama']) ?>
          <?= form_hidden('harga', $item['harga']) ?>
          <?= form_hidden('foto', $item['foto']) ?>
          
          <div class="card h-100 shadow-sm">
            <img src="<?= base_url('img/' . $item['foto']) ?>" class="card-img-top" alt="<?= $item['nama'] ?>" style="height: 220px; object-fit: cover;">
            <div class="card-body d-flex flex-column text-center">
              <h5 class="card-title mb-2"><?= $item['nama'] ?></h5>
              <p class="card-text mb-3"><?= number_to_currency($item['harga'], 'IDR') ?></p>
              <button type="submit" class="btn btn-info rounded-pill mt-auto">Beli</button>
            </div>
          </div>
          <?= form_close() ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
