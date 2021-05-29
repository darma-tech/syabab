<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produk extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Produk";
        $this->template->load('backend/template/master', 'Produk/produk', $data);
    }

    public function tambah()
    {
        $data['title'] = "Tambah Produk";
        $this->template->load('backend/template/master', 'Produk/input_produk', $data);
    }

    public function kategori()
    {
        $data['title'] = "Kategori Produk";
        $this->template->load('backend/template/master', 'Produk/kategori', $data);
    }
}
