<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\ThumbModel;

class Dashboard extends BaseController
{


	public function index()
	{
		$Thumb=new ThumbModel;
		$data=[
			"title"=>"Dashboard",
			"Thumbnail"=>$Thumb->find(1),
			
		];
		return view('admin/dashboard/index',$data);
	}
	public function updateThumb()
	{
		$vaidate=$this->validate([
			'file'=>[
				'uploaded[file]',
			]
		]);
		
		$Thumb=new ThumbModel;
		$data=[
			"id"=>'1',
			"keterangan"=>$this->request->getVar('keterangan'),
		];
		if ($vaidate) {
			$imageFile=$this->request->getFile('file');
			$name='image.jpg';
			$imageFile->move('../public/main_thumbnail/',$name,true);
			$data['thumbnail']=$name;

		}
		$Thumb->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Thumbnail Berhasil di Update'
		];
		echo json_encode($result);
	}
	

	//--------------------------------------------------------------------

}
