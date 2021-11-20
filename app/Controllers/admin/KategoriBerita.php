<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriBModel;
class KategoriBerita extends BaseController
{
	protected $title="Kategory Berita";

	public function index()
	{
		$data=[
			"title"=>$this->title,
		];
		return view('admin/kategoryB/index',$data);
	}
	public function table()
	{
		$KategoriB=new KategoriBModel;
		$data=[
			"KategoriB"	=>$KategoriB->findAll()
		];
		return view('admin/kategoryB/table',$data);
	}
	public function formEdit($id)
	{
		$KategoriB=new KategoriBModel;
		$data=[
			"title"	=>$this->title,
			"data"=>$KategoriB->find($id)
		];
		return view('admin/kategoryB/formEdit',$data);

	}
	public function formAdd()
	{
	
		$data=[
			"title"			=>$this->title,
		];
		return view('admin/kategoryB/formAdd',$data);

	}

	public function save()
	{

		$KategoriB=new KategoriBModel;
		$data=[
			
			"nm_kategori"=>$this->request->getVar('nm_kategori'),
		];
		$KategoriB->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Input'
		];
		
		echo json_encode($result);

	}

	public function update()
	{

		$KategoriB=new KategoriBModel;
		$data=[
			"id_kategori"=>$this->request->getVar('id_kategori'),
			"nm_kategori"=>$this->request->getVar('nm_kategori'),
		];
		$KategoriB->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Edit'
		];
		
		echo json_encode($result);

	}

	public function delete()
	{
		
		if ($this->request->isAJAX()) {
			$KategoriB=new KategoriBModel;
			$id=$this->request->getVar('id');
			$KategoriB->delete($id);
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