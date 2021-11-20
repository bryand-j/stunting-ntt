<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriEModel;
class KategoriEdukasi extends BaseController
{
	protected $title="Kategory Edukasi";

	public function index()
	{
		$data=[
			"title"=>$this->title,
		];
		return view('admin/kategoryE/index',$data);
	}
	public function table()
	{
		$KategoriE=new KategoriEModel;
		$data=[
			"KategoriE"	=>$KategoriE->findAll()
		];
		return view('admin/kategoryE/table',$data);
	}
	public function formEdit($id)
	{
		$KategoriE=new KategoriEModel;
		$data=[
			"title"	=>$this->title,
			"data"=>$KategoriE->find($id)
		];
		return view('admin/kategoryE/formEdit',$data);

	}
	public function formAdd()
	{
	
		$data=[
			"title"			=>$this->title,
		];
		return view('admin/kategoryE/formAdd',$data);

	}

	public function save()
	{

		$KategoriE=new KategoriEModel;
		$data=[
			
			"nm_kategori"=>$this->request->getVar('nm_kategori'),
		];
		$KategoriE->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Input'
		];
		
		echo json_encode($result);

	}

	public function update()
	{

		$KategoriE=new KategoriEModel;
		$data=[
			"id_kategori"=>$this->request->getVar('id_kategori'),
			"nm_kategori"=>$this->request->getVar('nm_kategori'),
		];
		$KategoriE->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Update'
		];
		
		echo json_encode($result);

	}

	public function delete()
	{
		
		if ($this->request->isAJAX()) {
			$KategoriE=new KategoriEModel;
			$id=$this->request->getVar('id');
			$KategoriE->delete($id);
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