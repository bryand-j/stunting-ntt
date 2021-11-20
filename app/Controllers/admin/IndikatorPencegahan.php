<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\IndikatorModel;
class IndikatorPencegahan extends BaseController
{
	protected $title="Indikator Pencegahan Stunting";

	public function index()
	{
		$data=[
			"title"=>$this->title,
		];
		return view('admin/indikator/index',$data);
	}
	public function table()
	{
		$Indikator=new IndikatorModel;
		$data=[
			"Indikator"	=>$Indikator->findAll()
		];
		return view('admin/indikator/table',$data);
	}
	public function formEdit($id)
	{
		$Indikator=new IndikatorModel;
		$data=[
			"title"	=>$this->title,
			"data"=>$Indikator->find($id)
		];
		return view('admin/indikator/formEdit',$data);

	}
	public function formAdd()
	{
	
		$data=[
			"title"			=>$this->title,
		];
		return view('admin/indikator/formAdd',$data);

	}

	public function save()
	{

		$Indikator=new IndikatorModel;
		$data=[
			
			"nm_indikator"=>$this->request->getVar('nm_indikator'),
			"deskripsi"=>$this->request->getVar('deskripsi'),
		];
		
		$Indikator->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Input'
		];
		
		echo json_encode($result);

	}

	public function update()
	{

		$Indikator=new IndikatorModel;
		$data=[
			
			"id_indikator"=>$this->request->getVar('id_indikator'),
			"nm_indikator"=>$this->request->getVar('nm_indikator'),
			"deskripsi"=>$this->request->getVar('deskripsi'),
		];
		
		$Indikator->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Update'
		];
		
		echo json_encode($result);

	}

	public function delete()
	{
		
		if ($this->request->isAJAX()) {
			$Indikator=new IndikatorModel;
			$id=$this->request->getVar('id');
			$Indikator->delete($id);
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