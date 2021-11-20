<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AksiModel;
class AksiKonvergensi extends BaseController
{
	protected $title="Aksi Konvergensi";

	public function index()
	{
		$data=[
			"title"=>$this->title,
		];
		return view('admin/aksi/index',$data);
	}
	public function table()
	{
		$Aksi=new AksiModel;
		$data=[
			"Aksi"	=>$Aksi->findAll()
		];
		return view('admin/aksi/table',$data);
	}
	public function formEdit($id)
	{
		$Aksi=new AksiModel;
		$data=[
			"title"	=>$this->title,
			"data"=>$Aksi->find($id)
		];
		return view('admin/aksi/formEdit',$data);

	}
	public function formAdd()
	{
	
		$data=[
			"title"			=>$this->title,
		];
		return view('admin/aksi/formAdd',$data);

	}

	public function save()
	{
		$vaidate=$this->validate([
			'file'=>[
				'uploaded[file]',
			]
		]);

		$Aksi=new AksiModel;
		$data=[
			
			"nama_aksi"=>$this->request->getVar('nama_aksi'),
			"deskrpsi"=>$this->request->getVar('deskrpsi'),
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$newName=$imageFile->getRandomName();
			$imageFile->move('../public/gambarAksi/',$newName);
			$data['gambar']=$newName;

		}
		$Aksi->save($data);
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

		$Aksi=new AksiModel;
		$data=[
			
			"id_aksi"=>$this->request->getVar('id_aksi'),
			"nama_aksi"=>$this->request->getVar('nama_aksi'),
			"deskrpsi"=>$this->request->getVar('deskrpsi'),
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$newName=$imageFile->getRandomName();
			$imageFile->move('../public/gambarAksi/',$newName);
			$data['gambar']=$newName;

		}
		$Aksi->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Update'
		];
		
		echo json_encode($result);

	}

	public function delete()
	{
		
		if ($this->request->isAJAX()) {
			$Aksi=new AksiModel;
			$id=$this->request->getVar('id');
			$Aksi->delete($id);
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