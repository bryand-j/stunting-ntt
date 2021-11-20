<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EmbedModel;
class Embed extends BaseController
{
	protected $title="Embed";

	public function index()
	{
		$data=[
			"title"=>$this->title,
		];
		return view('admin/embed/index',$data);
	}
	public function table()
	{
		$Embed=new EmbedModel;
		$data=[
			"Embed"	=>$Embed->findAll()
		];
		return view('admin/embed/table',$data);
	}
	public function formEdit($id)
	{
		$Embed=new EmbedModel;
		$data=[
			"title"	=>$this->title,
			"data"=>$Embed->find($id)
		];
		return view('admin/embed/formEdit',$data);

	}
	public function formAdd()
	{
	
		$data=[
			"title"			=>$this->title,
		];
		return view('admin/embed/formAdd',$data);

	}

	public function save()
	{

		$Embed=new EmbedModel;
		$data=[
			
			"kode_embed"=>$this->request->getVar('kode_embed'),
			"uniqkode"=>$this->request->getVar('uniqkode'),
			"keterangan"=>$this->request->getVar('keterangan'),
		];
		$Embed->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Input'
		];
		
		echo json_encode($result);

	}

	public function update()
	{

		$Embed=new EmbedModel;
		$data=[
			"id_embed"=>$this->request->getVar('id_embed'),
			"kode_embed"=>$this->request->getVar('kode_embed'),
			"uniqkode"=>$this->request->getVar('uniqkode'),
			"keterangan"=>$this->request->getVar('keterangan'),
		];
		$Embed->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Update'
		];
		
		echo json_encode($result);

	}

	public function delete()
	{
		
		if ($this->request->isAJAX()) {
			$Embed=new EmbedModel;
			$id=$this->request->getVar('id');
			$Embed->delete($id);
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