<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'Ketoprak Jakarta',
                'harga'  => 14500,
                'jumlah' => 10,
                'foto' => 'ketoprak.jpeg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Nasi Goreng',
                'harga'  => 12500,
                'jumlah' => 7,
                'foto' => 'nasigoreng.jpeg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Dawet',
                'harga'  => 10500,
                'jumlah' => 5,
                'foto' => 'dawet.jpeg',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('produk')->insert($item);
        }
    }
}
