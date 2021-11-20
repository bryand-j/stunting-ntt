<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\BahanModel;
use App\Models\KategoriEModel;
class BahanEdukasi extends BaseController
{
	protected $title="Bahan Edukasi";

	public function index()
	{
		$data=[
			"title"=>$this->title,
			'jumlah'=>'ini Jumlah'
		];
		return view('admin/bahanEdukasi/index',$data);
	}
	public function table()
	{
		$Bahan=new BahanModel;
		$data=[
			"Bahan"	=>$Bahan->getAll()
		];
		return view('admin/bahanEdukasi/table',$data);
	}
	public function formEdit($id)
	{
		$Bahan=new BahanModel;
		$kategori=new KategoriEModel;
		$data=[
			"title"	=>$this->title,
			"kategori"		=>$kategori->findAll(),
			"data"=>$Bahan->find($id)
		];
		return view('admin/bahanEdukasi/formEdit',$data);

	}
	public function formAdd()
	{
		$kategori=new KategoriEModel;
		$data=[
			"title"			=>$this->title,
			"kategori"		=>$kategori->findAll()
		];
		return view('admin/bahanEdukasi/formAdd',$data);

	}


	public function save()
	{
		$vaidate=$this->validate([
			'file'=>[
				'uploaded[file]',
			]
		]);
		
		$Bahan=new BahanModel;
		$data=[
			
			"judul_bahan"=>$this->request->getVar('judul_bahan'),
			"kategori_bahan"=>$this->request->getVar('kategori_bahan'),
			"tgl_bahan"=>$this->request->getVar('tgl_bahan'),
			"deskripsi"=>$this->request->getVar('deskripsi'),
			
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$newName=$imageFile->getRandomName();
			$imageFile->move('../public/gambarBahan/',$newName);
			$data['gambar']=$newName;

		}
		$Bahan->save($data);
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
		
		$Bahan=new BahanModel;
		$data=[
			"id_bahan"=>$this->request->getVar('id_bahan'),
			"judul_bahan"=>$this->request->getVar('judul_bahan'),
			"kategori_bahan"=>$this->request->getVar('kategori_bahan'),
			"tgl_bahan"=>$this->request->getVar('tgl_bahan'),
			"deskripsi"=>$this->request->getVar('deskripsi'),
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$newName=$imageFile->getRandomName();
			$imageFile->move('../public/gambarBahan/',$newName);
			$data['gambar']=$newName;

		}
		$Bahan->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Edit'
		];
		
		echo json_encode($result);

	}

	public function delete()
	{
		
		if ($this->request->isAJAX()) {
			$Bahan=new BahanModel;
			$id=$this->request->getVar('id');
			$Bahan->delete($id);
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