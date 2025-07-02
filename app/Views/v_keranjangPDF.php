<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; color: #333; }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            color: #0d6efd; /* biru brand */
        }
        .header p {
            margin: 0;
            font-size: 11px;
        }
        table {
            width: 100%; 
            border-collapse: collapse; 
            margin-bottom: 20px;
        }
        th, td { 
            border: 1px solid #ccc; 
            padding: 6px; 
            text-align: center;
        }
        th { 
            background-color: #0d6efd; 
            color: #fff;
        }
        .right { text-align: right; }
        .footer {
            font-size: 11px;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Lena House</h1>
    <p>Jl.Nakula no 55, Kota Semarang Tengah</p>
    <p>Telp: 0123-456789 | Email: lenahouse@gmail.com</p>
</div>

<?php
    // Buat nomor invoice unik, misalnya pakai timestamp
    $invoiceNumber = 'INV-' . date('Ymd-His');
?>
<p><strong>Invoice Number:</strong> <?= $invoiceNumber ?></p>
<p><strong>Tanggal:</strong> <?= date("Y-m-d H:i:s") ?></p>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Foto</th>
            <th>Harga Satuan</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $no = 1; 
    $grandTotal = 0;
    foreach ($cart as $item): 
        $subtotal = $item['price'] * $item['qty'];
        $grandTotal += $subtotal;

        // Buat foto jadi base64 supaya muncul di PDF
        $path = FCPATH . 'img/' . $item['options']['foto'];
        if (file_exists($path)) {
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        } else {
            $base64 = '';
        }
    ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($item['name']) ?></td>
            <td>
                <?php if ($base64): ?>
                    <img src="<?= $base64 ?>" width="50px">
                <?php else: ?>
                    -
                <?php endif; ?>
            </td>
            <td class="right"><?= "Rp " . number_format($item['price'], 2, ",", ".") ?></td>
            <td><?= $item['qty'] ?></td>
            <td class="right"><?= "Rp " . number_format($subtotal, 2, ",", ".") ?></td>
        </tr>
    <?php endforeach; ?>
        <tr>
            <td colspan="5" class="right"><strong>Grand Total</strong></td>
            <td class="right"><strong><?= "Rp " . number_format($grandTotal, 2, ",", ".") ?></strong></td>
        </tr>
    </tbody>
</table>

<div class="footer">
    <p>Terima kasih sudah Mampir di Lena House</p>
    <p>Downloaded on <?= date("Y-m-d H:i:s") ?></p>
</div>

</body>
</html>
