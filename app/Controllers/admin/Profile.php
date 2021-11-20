<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProfileModel;
class Profile extends BaseController
{
	protected $title="Profile";

	public function index()
	{
		$Data=new ProfileModel;
		$data=[
			"title"=>$this->title,
			"data"=>$Data->find(1)
		];
		return view('admin/profile/index',$data);
	}
	
	
	public function update()
	{

		$vaidate=$this->validate([
			'file'=>[
				'uploaded[file]',
			]
		]);

		$Profile=new ProfileModel;
		$data=[
			
			"id_profil"=>1,
			"nama_profil"=>$this->request->getVar('nama_profil'),
			"alamat"=>$this->request->getVar('alamat'),
			"kontak1"=>$this->request->getVar('kontak1'),
			"kontak2"=>$this->request->getVar('kontak2'),
			"email"=>$this->request->getVar('email'),
			"youtube"=>$this->request->getVar('youtube'),
			"deskripsi"=>$this->request->getVar('deskripsi'),
			"latar_belakang"=>$this->request->getVar('latar_belakang'),
			"tentang_kami"=>$this->request->getVar('tentang_kami'),
			"regulasi"=>$this->request->getVar('regulasi'),
			"peran_pokja"=>$this->request->getVar('peran_pokja'),
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$name='logo.png';
			$imageFile->move('../public/logo/',$name,true);
			$data['logo']=$name;

		}
		if ($this->request->getFile('struktur_org')) {
			$imageFile1=$this->request->getFile('struktur_org');
			$name1=$imageFile1->getRandomName();
			$imageFile1->move('../public/struktur_org/',$name1,true);
			$data['struktur_org']=$name1;

		}
		$Profile->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Update'
		];
		
		echo json_encode($result);

	}

	
}