<?php namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\Controllers;
class Artikel extends BaseController{


	public function index(){
		$model = new ArtikelModel();
		$data  = [
				'judul' => "Daftar Artikel",
 				'artikel' => $model->getArtikel(),
 				'nama_lengkap' => $this->session->get('nama_lengkap'),
				'level' => $this->session->get('level'),
				'username' =>$this->session->get('username')
		];
		
		return $this->renderView('admin/artikel/index', $data);
	}

	public function add(){
		$data = [
			'judul' => "Form Artikel",
			'nama_lengkap' => $this->session->get('nama_lengkap'),
			'level' => $this->session->get('level'),
			'username' => $this->session->get('username'),
		];
		return $this->renderView('admin/artikel/form', $data);
	}

	public function saveAdd(){
		$model = new ArtikelModel();
		$data = array(
            'judul' => $this->request->getPost('judul'),
            'slug'  => url_title($this->request->getPost('judul'), '-', TRUE),
            'isi' 	=> $this->request->getPost('isi'),
        );
        $simpan = $model->saveData($data);
        if($simpan)
	    {
	       session()->setFlashdata('success', 'Berhasil Meyimpan!!');
	       return redirect()->to('/artikel'); 
	    }
        
	
	}
	public function edit($id)
		{
		$model = new ArtikelModel();
			$data = [
			'judul' => "Form Artikel",
			'artikel' => $model->getArtikel($id),
		];

		    return $this->renderView('admin/artikel/edit', $data);
		} 

	public function update()
    {
        $model = new ArtikelModel();
        $id = $this->request->getPost('id');
        $data = array(
            'judul' => $this->request->getPost('judul'),
            'slug'  => url_title($this->request->getPost('judul'), '-', TRUE),
            'isi' 	=> $this->request->getPost('isi'),
        );
        $model->updateData($data, $id);
        return redirect()->to('/artikel');
    }
 
    public function delete($id)
    {
        $model = new ArtikelModel();
        $model->deleteData($id);
        return redirect()->to('/artikel');
    }
}