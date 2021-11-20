<?php namespace App\Models;

use CodeIgniter\Model;

class EmbedModel extends Model
{
    protected $table      = 'embed';
    protected $primaryKey = 'id_embed';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['kode_embed','uniqkode','keterangan'];

    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at'; 
 
}