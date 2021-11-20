<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriBModel extends Model
{
    protected $table      = 'kategori_berita';
    protected $primaryKey = 'id_kategori';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nm_kategori'];

    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at';
 
}