<?php namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table      = 'berita';
    protected $primaryKey = 'id_berita';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['kategori_berita', 'judul_berita','thumbnail_berita','tgl_post','isi_berita','author','hint'];

    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at';


    public function getAll()
    {
        return $this->db->table('berita')
                    ->join('kategori_berita','kategori_berita.id_kategori=berita.kategori_berita')
                    ->join('user','user.id_user=berita.author')
                    ->where('berita.delete_at',null)
                    ->where('author',session()->get('ID_User'))
                    ->get()->getResultArray();
    }
 
}