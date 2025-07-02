<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashData('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="container my-4">
  <div class="card shadow rounded-4">
    <div class="card-body">
     <?= form_open('keranjang/edit') ?>
      <table class="table datatable table-hover table-bordered rounded-4 overflow-hidden mx-auto" style="width: 90%;">
          <thead class="table-dark">
              <tr>
                  <th>Nama</th>
                  <th>Foto</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Subtotal</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php
              $i = 1;
              if (!empty($items)) :
                  foreach ($items as $item) :
              ?>
                      <tr>
                          <td><?= esc($item['name']) ?></td>
                          <td><img src="<?= base_url("img/" . $item['options']['foto']) ?>" width="100px"></td>
                          <td><?= number_to_currency($item['price'], 'IDR') ?></td>
                          <td>
                              <input type="number" min="1" name="qty<?= $i++ ?>" class="form-control" value="<?= esc($item['qty']) ?>">
                          </td>
                          <td><?= number_to_currency($item['subtotal'], 'IDR') ?></td>
                          <td>
                              <a href="<?= base_url('keranjang/delete/' . $item['rowid']) ?>" class="btn btn-danger">
                                  <i class="bi bi-trash"></i>
                              </a>
                          </td>
                      </tr>
              <?php
                  endforeach;
              endif;
              ?>
          </tbody>
      </table>

      <div class="alert alert-info mt-3">
          <?= "Total = " . number_to_currency($total, 'IDR') ?>
      </div>

      <button type="submit" class="btn btn-primary">Perbarui Keranjang</button>
      <a class="btn btn-warning" href="<?= base_url() ?>keranjang/clear">Kosongkan Keranjang</a>
      <a href="<?= base_url() ?>keranjang/download" class="btn btn-success">Download Invoice</a>
      <?php echo form_close() ?>

    </div>
  </div>
</div>

<?= $this->endSection() ?>
