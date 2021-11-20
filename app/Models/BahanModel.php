<?php namespace App\Models;

use CodeIgniter\Model;

class BahanModel extends Model
{
    protected $table      = 'bahan_edukasi';
    protected $primaryKey = 'id_bahan';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['kategori_bahan','judul_bahan','gambar','tgl_bahan','deskripsi'];

    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at';


    public function getAll()
    {
        return $this->db->table('bahan_edukasi')
                    ->join('kategori_edukasi','kategori_edukasi.id_kategori=bahan_edukasi.kategori_bahan')
                    ->where('bahan_edukasi.delete_at',null)
                    ->get()->getResultArray();

                    
    }
 
}
