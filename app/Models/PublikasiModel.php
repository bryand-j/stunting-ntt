<?php namespace App\Models;

use CodeIgniter\Model;

class PublikasiModel extends Model
{
    protected $table      = 'publikasi';
    protected $primaryKey = 'id_publikasi';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nm_publikasi','file','keterangan','link','tgl_publikasi','hint','author'];

    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at'; 


    public function getAll()
    {
        return $this->db->table('publikasi')
                    ->join('user','user.id_user=publikasi.author')
                    ->where('publikasi.delete_at',null)
                    ->where('author',session()->get('ID_User'))
                    ->get()->getResultArray();
    }
 
}