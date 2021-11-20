<?php namespace App\Models;

use CodeIgniter\Model;

class IndikatorModel extends Model
{
    protected $table      = 'indikator_pencegahan_stunting';
    protected $primaryKey = 'id_indikator';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nm_indikator','deskripsi'];

    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at'; 
 
}