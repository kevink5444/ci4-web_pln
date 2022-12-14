<?php
namespace App\Models;
use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table      = 'Pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama', 'alamat', 'no_telp', 'daya', 'golongan', 'token_awal','idpel'];
    protected $useTimestamps = true;
}