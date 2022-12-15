<?php
namespace App\Models;
use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table      = 'Pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama', 'alamat', 'golongan'];
    protected $useTimestamps = true;
}