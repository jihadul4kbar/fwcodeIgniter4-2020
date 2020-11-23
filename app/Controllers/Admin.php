<?php namespace App\Controllers;

class Admin extends BaseController{
	public function index(){
		$session = session();
		$data = [
			'judul' => "Beranda",
			'nama_lengkap' => $session->get('nama_lengkap'),
			'level' => $session->get('level'),
			'username' =>$session->get('username')
		];
        return $this->renderView('admin/isi', $data);
	}
}