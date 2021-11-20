<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\PublikasiModel;
class Publikasi extends BaseController
{
	protected $title="Publikasi";

	public function index()
	{
		$data=[
			"title"=>$this->title,
		];
		return view('admin/publikasi/index',$data);
	}
	public function table()
	{
		$Publikasi=new PublikasiModel;
		$data=[
			"Publikasi"	=>$Publikasi->getAll()
		];
		return view('admin/publikasi/table',$data);
	}
	public function formEdit($id)
	{
		$Publikasi=new PublikasiModel;
		$data=[
			"title"	=>$this->title,
			"data"=>$Publikasi->find($id)
		];
		return view('admin/publikasi/formEdit',$data);

	}
	public function formAdd()
	{
		$data=[
			"title"			=>$this->title
		];
		return view('admin/publikasi/formAdd',$data);

	}


	public function save()
	{
		$vaidate=$this->validate([
			'file'=>[
				'uploaded[file]',
			]
		]);
		
		$Publikasi=new PublikasiModel;
		$data=[
			
			"nm_publikasi"=>$this->request->getVar('nm_publikasi'),
			"keterangan"=>$this->request->getVar('keterangan'),
			"link"=>$this->request->getVar('link'),
			"tgl_publikasi"=>$this->request->getVar('tgl_publikasi'),
			"hint"=>0,
			"author"=>session()->get('ID_User'),
			
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$newName=$imageFile->getRandomName();
			$imageFile->move('../public/FilePublikasi/',$newName);
			$data['file']=$newName;

		}
		$Publikasi->save($data);
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
		
		$Publikasi=new PublikasiModel;
		$data=[
			"id_publikasi"=>$this->request->getVar('id_publikasi'),
			"nm_publikasi"=>$this->request->getVar('nm_publikasi'),
			"keterangan"=>$this->request->getVar('keterangan'),
			"link"=>$this->request->getVar('link'),
			"tgl_publikasi"=>$this->request->getVar('tgl_publikasi'),
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$newName=$imageFile->getRandomName();
			$imageFile->move('../public/FilePublikasi/',$newName);
			$data['file']=$newName;

		}
		$Publikasi->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Edit'
		];
		
		echo json_encode($result);

	}

	public function delete()
	{
		
		if ($this->request->isAJAX()) {
			$Publikasi=new PublikasiModel;
			$id=$this->request->getVar('id');
			$Publikasi->delete($id);
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