<?php

namespace App\Controllers;

use App\Models\PasangBaruModel;

class pasangbaru extends BaseController
{
  public function index()
  {
  $pasangbaru = new PasangBaruModel();
  $data['pasangbaru'] = $pasangbaru->orderBy('nama', 'asc')->findAll();
  echo view('pasangbaru', $data);

  }
  public function add() 
  {
	return view('add');
  }
  public function create() {
      $pasangbaru = new PasangBaruModel();

      $result = $pasangbaru->insert([
         'nama'=>$this->request->getPost("nama"),
         'alamat'=>$this->request->getPost("alamat"),
         'no_telp'=>$this->request->getPost("no_telp"),
         'daya'=>$this->request->getPost("daya"),
         'golongan'=>$this->request->getPost("golongan"),
         'token_awal'=>$this->request->getPost("token_awal"),
         'idpel'=>$this->request->getPost("idpel"),
         
      ]);

  }
}