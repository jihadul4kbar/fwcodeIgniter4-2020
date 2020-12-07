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
				'username' =>$this->session->get('username'),
				'msg' => str_replace('+', ' ', $this->request->getGet('msg'))
		];
		
		return $this->renderView('admin/artikel/index', $data);
	}

	public function add(){
		$model = new ArtikelModel();
		$data = [
			'judul' => "Form Artikel",
			'nama_lengkap' => $this->session->get('nama_lengkap'),
			'level' => $this->session->get('level'),
			'username' => $this->session->get('username'),
			'kategori' => $model->getKategori(),
			'msg' => str_replace('+', ' ', $this->request->getGet('msg'))
		];
		return $this->renderView('admin/artikel/form', $data);
	}

	public function saveAdd(){
		$model = new ArtikelModel();

		$file = $this->request->getFile('gambar');
        $name = $file->getName();// Mengetahui Nama File
        $type = $file->getClientMimeType();// Mengetahui Mime File
		$data = array(
            'judul' => $this->request->getPost('judul'),
            'slug'  => url_title($this->request->getPost('judul'), '-', TRUE),
            'id_kategori' 	=> $this->request->getPost('id_kategori'),
            'isi' 	=> $this->request->getPost('isi'),
            'gambar' => str_replace(' ', '_', $name),
        );

        //print_r($data);
        $simpan = $model->saveData($data);
		
		if ($type == (('image/png') or ('image/jpeg'))) //cek mime file
        { // File Tipe Sesuai
          $image = \Config\Services::image('gd'); //Load Image Libray
          $info = $image->withFile($file)->getFile()->getProperties(true); //Mendapatkan Files Propertis
          $width = $info['width'];// Mengetahui Image Width
          $height = $info['height'];// Mengetahui Image Height

          helper('filesystem'); // Load Helper File System
          $direktori = ROOTPATH.'/public/assets/upload'; //definisikan direktori upload
          $namabaru = str_replace(' ', '_', $name); //definisikan nama fiel yang baru
          if ($file->move($direktori, $namabaru)){
            return redirect()->to(base_url('artikel?msg=Upload Berhasil'));
          }else{

            return redirect()->to(base_url('artikel?msg=Upload Gagal'));
          }
        }else{
          // File Tipe Tidak Sesuai
          return redirect()->to(base_url('artikel?msg=Format File Salah'));
        }
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
			'nama_lengkap' => $this->session->get('nama_lengkap'),
			'level' => $this->session->get('level'),
			'username' =>$this->session->get('username')
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


	function imgup(){
		$data = [
			'judul' => "up",
			'nama_lengkap' => $this->session->get('nama_lengkap'),
			'level' => $this->session->get('level'),
			'username' => $this->session->get('username'),
			'msg' => str_replace('+', ' ', $this->request->getGet('msg')),
		];
		return $this->renderView('admin/artikel/up',$data);
	}
    function uploadimg(){
        $file = $this->request->getFile('uploadedFile');
        $name = $file->getName();// Mengetahui Nama File
        $originalName = $file->getClientName();// Mengetahui Nama Asli
        $tempfile = $file->getTempName();// Mengetahui Nama TMP File name
        $ext = $file->getClientExtension();// Mengetahui extensi File
        $type = $file->getClientMimeType();// Mengetahui Mime File
        $size_kb = $file->getSize('kb'); // Mengetahui Ukuran File dalam kb
        $size_mb = $file->getSize('mb');// Mengetahui Ukuran File dalam mb

        
        //$namabaru = $file->getRandomName();//define nama fiel yang baru secara acak
        
        if ($type == (('image/png') or ('image/jpeg'))) //cek mime file
        { // File Tipe Sesuai
          $image = \Config\Services::image('gd'); //Load Image Libray
          $info = $image->withFile($file)->getFile()->getProperties(true); //Mendapatkan Files Propertis
          $width = $info['width'];// Mengetahui Image Width
          $height = $info['height'];// Mengetahui Image Height

          helper('filesystem'); // Load Helper File System
          $direktori = ROOTPATH.'/public/assets/upload'; //definisikan direktori upload
          $namabaru = $name; //definisikan nama fiel yang baru
          $map = directory_map($direktori, FALSE, TRUE); // List direktori

          // /* Cek File apakah ada */
          foreach ($map as $key) {
            if ($key == $namabaru){
              delete_files($direktori,$namabaru); //Hapus terlebih dahulu jika file ada
            }
          }
          //Metode Upload Pilih salah satu
          //$path = $this->request->getFile('uploadedFile')->store($direktori, $namabaru);
          // $file->move($direktori, $namabaru)
          if ($file->move($direktori, $namabaru)){
            return redirect()->to(base_url('artikel/imgup?msg=Upload Berhasil'));
          }else{

            return redirect()->to(base_url('artikel/imgup?msg=Upload Gagal'));
          }
        }else{
          // File Tipe Tidak Sesuai
          return redirect()->to(base_url('artikel/imgup?msg=Format File Salah'));
        }
       }
}