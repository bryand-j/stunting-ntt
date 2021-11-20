<?php namespace App\Models;

use CodeIgniter\Model;

class AksiModel extends Model
{
    protected $table      = 'aksi_konvergensi';
    protected $primaryKey = 'id_aksi';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_aksi','deskrpsi','gambar'];

    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at'; 
 
}