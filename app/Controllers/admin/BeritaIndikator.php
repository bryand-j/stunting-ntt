<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\BeritaIndikatorModel;
use App\Models\IndikatorModel;
class BeritaIndikator extends BaseController
{
	protected $title="Berita Indikator";

	public function index()
	{
		$data=[
			"title"=>$this->title,
		];
		return view('admin/beritaIndikator/index',$data);
	}
	public function table()
	{
		$Berita=new BeritaIndikatorModel;
		$data=[
			"Berita"	=>$Berita->getAll()
		];
		return view('admin/beritaIndikator/table',$data);
	}
	public function formEdit($id)
	{
		$Berita=new BeritaIndikatorModel;
		$indikator=new IndikatorModel;
		$data=[
			"title"	=>$this->title,
			"indikator"		=>$indikator->findAll(),
			"data"=>$Berita->find($id)
		];
		return view('admin/beritaIndikator/formEdit',$data);

	}
	public function formAdd()
	{
		$indikator=new IndikatorModel;
		$data=[
			"title"			=>$this->title,
			"indikator"		=>$indikator->findAll()
		];
		return view('admin/beritaIndikator/formAdd',$data);

	}


	public function save()
	{
		$vaidate=$this->validate([
			'file'=>[
				'uploaded[file]',
			]
		]);
		
		$Berita=new BeritaIndikatorModel;
		$data=[
			
			"judul_berita"=>$this->request->getVar('judul_berita'),
			"indikator_pencegah"=>$this->request->getVar('indikator_pencegah'),
			"tgpost"=>$this->request->getVar('tgpost'),
			"isi_berita"=>$this->request->getVar('isi_berita'),
			
			"hint"=>0,
			"author"=>session()->get('ID_User'),
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$newName=$imageFile->getRandomName();
			$imageFile->move('../public/thumbnail_berita_indikator/',$newName);
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
		
		$Berita=new BeritaIndikatorModel;
		$data=[
			
			"idberita"=>$this->request->getVar('idberita'),
			"judul_berita"=>$this->request->getVar('judul_berita'),
			"indikator_pencegah"=>$this->request->getVar('indikator_pencegah'),
			"tgpost"=>$this->request->getVar('tgpost'),
			"isi_berita"=>$this->request->getVar('isi_berita'),
			
			"hint"=>0,
			"author"=>session()->get('ID_User'),
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$newName=$imageFile->getRandomName();
			$imageFile->move('../public/thumbnail_berita_indikator/',$newName);
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
			$Berita=new BeritaIndikatorModel;
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