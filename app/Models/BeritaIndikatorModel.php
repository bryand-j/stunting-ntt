<?php namespace App\Models;

use CodeIgniter\Model;

class BeritaIndikatorModel extends Model
{
	protected $table      = 'berita_staunting';
	protected $primaryKey = 'idberita';

	protected $returnType = 'array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['indikator_pencegah', 'judul_berita','thumbnail_berita','tgpost','isi_berita','author','hint'];

	protected $useTimestamps = true;
	protected $createdField  = 'create_at';
	protected $updatedField  = 'update_at';
	protected $deletedField  = 'deleta_at';


	public function getAll()
	{
		return $this->db->table('berita_staunting')
					->select('berita_staunting.*,indikator_pencegahan_stunting.nm_indikator,user.username')
					->join('indikator_pencegahan_stunting','indikator_pencegahan_stunting.id_indikator=berita_staunting.indikator_pencegah')
					->join('user','user.id_user=berita_staunting.author')
					->where('berita_staunting.deleta_at',null)
					->where('author',session()->get('ID_User'))
					->get()->getResultArray();
	}
 
}