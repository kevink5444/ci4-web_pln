<?php
namespace App\Models;
use CodeIgniter\Model;

class PasangBaruModel extends Model
{
    protected $table      = 'pasangbaru';
    protected $primaryKey = 'id_pasangbaru';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama', 'alamat', 'no_telp', 'daya', 'golongan', 'token_awal', 'idpel'];
    protected $useTimestamps = true;
}