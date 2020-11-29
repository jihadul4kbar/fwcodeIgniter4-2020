<?php namespace App\Controllers;

class Admin extends BaseController{
	public function index(){
		$data = [
			'judul' => "Beranda",
			'nama_lengkap' => $this->session->get('nama_lengkap'),
			'level' => $this->session->get('level'),
			'username' =>$this->session->get('username')
		];
        return $this->renderView('admin/isi', $data);
	}
}