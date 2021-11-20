<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\BeritaModel;
use App\Models\KategoriBModel;
class Berita extends BaseController
{
	protected $title="Berita";

	public function index()
	{
		$data=[
			"title"=>$this->title,
		];
		return view('admin/berita/index',$data);
	}
	public function table()
	{
		$Berita=new BeritaModel;
		$data=[
			"Berita"	=>$Berita->getAll()
		];
		return view('admin/berita/table',$data);
	}
	public function formEdit($id)
	{
		$Berita=new BeritaModel;
		$kategori=new KategoriBModel;
		$data=[
			"title"	=>$this->title,
			"kategori"		=>$kategori->findAll(),
			"data"=>$Berita->find($id)
		];
		return view('admin/berita/formEdit',$data);

	}
	public function formAdd()
	{
		$kategori=new KategoriBModel;
		$data=[
			"title"			=>$this->title,
			"kategori"		=>$kategori->findAll()
		];
		return view('admin/berita/formAdd',$data);

	}


	public function save()
	{
		$vaidate=$this->validate([
			'file'=>[
				'uploaded[file]',
			]
		]);
		
		$Berita=new BeritaModel;
		$data=[
			
			"judul_berita"=>$this->request->getVar('judul_berita'),
			"kategori_berita"=>$this->request->getVar('kategori_berita'),
			"tgl_post"=>$this->request->getVar('tgl_post'),
			"isi_berita"=>$this->request->getVar('isi_berita'),
			
			"hint"=>0,
			"author"=>session()->get('ID_User'),
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$newName=$imageFile->getRandomName();
			$imageFile->move('../public/thumbnail/',$newName);
			$data['thumbnail_berita']=$newName;

		}
		$Berita->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Input'
		];
		
		echo json_encode($result);

	}

	public function update()
	{

		$vaidate=$this->validate([
			'file'=>[
				'uploaded[file]',
			]
		]);
		
		$Berita=new BeritaModel;
		$data=[
			"id_berita"=>$this->request->getVar('id_berita'),
			"judul_berita"=>$this->request->getVar('judul_berita'),
			"kategori_berita"=>$this->request->getVar('kategori_berita'),
			"tgl_post"=>$this->request->getVar('tgl_post'),
			"isi_berita"=>$this->request->getVar('isi_berita'),
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$newName=$imageFile->getRandomName();
			$imageFile->move('../public/thumbnail/',$newName);
			$data['thumbnail_berita']=$newName;

		}
		$Berita->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Edit'
		];
		
		echo json_encode($result);

	}

	public function delete()
	{
		
		if ($this->request->isAJAX()) {
			$Berita=new BeritaModel;
			$id=$this->request->getVar('id');
			$Berita->delete($id);
			$result=[
				'type'		=>'success',
			];
			
			echo json_encode($result);
		}
		else{
			echo "Access Denide!!";
		}
		

	}
}