<?php
namespace App\Controllers;

use App\Models\ProdukModel;

class Home extends BaseController
{
    protected $product;

    function __construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProdukModel();
    }
    public function index()
    {
        $productModel = new ProdukModel();
        $products = $productModel->findAll(); // ambil semua produk

        return view('v_home', ['produk' => $products]);
    }
}
