<?php
namespace App\Controllers;
use App\Models\PelangganModel;

class Pelanggan extends BaseController
{
   public function pelanggan()
   {
        $pelanggan = new PelangganModel();
        $data['pelanggan'] = $pelanggan->orderBy('nama', 'asc')->findAll();
        echo view('pelanggan', $data);
   }
}