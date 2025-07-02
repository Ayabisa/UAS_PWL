<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk'; // pastikan sesuai nama tabel (huruf kecil)
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'harga', 'jumlah', 'foto', 'created_at', 'updated_at'
    ];  
}
