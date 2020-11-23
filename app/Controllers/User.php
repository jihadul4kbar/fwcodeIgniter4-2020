<?php namespace App\Controllers;
use App\Models\UserModel;
use Codeniter\Controllers;

class User extends BaseController{
	public function index(){
		$model = new UserModel();
		$data = [
			'judul' => "Data User",
			'user' => $model->getData(),
			'nama_lengkap' => $this->session->get('nama_lengkap'),
			'level' => $this->session->get('level'),
			'username' =>$this->session->get('username')
		];
		return $this->renderView('admin/user/index',$data);
	}

	public function add(){

		$data = [
			'judul' => "Form Tambah User",
			'nama_lengkap' => $this->session->get('nama_lengkap'),
			'level' => $this->session->get('level'),
			'username' =>$this->session->get('username')
				];
		return $this->renderView('admin/user/form',$data);
	}

	function saveAdd(){
		$rules = [
            'Nama Lengkap'          => 'required|min_length[5]|max_length[20]',
            'Username'         => 'required|min_length[6]|max_length[50]|is_unique[user.username]',
            'Password'      => 'required|min_length[6]|max_length[200]',
            'Level'  => 'required'
		];
		if($this->validate($rules)){
		$model = new UserModel();
		$data = array(
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username'  => $this->request->getPost('username'),
            'password' 	=> password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
            'level'     => $this->request->getPost('level')
        );
		$simpan = $model->saveData($data);
		return redirect()->to('/user');
		}else{
			$data = [
				'validation' => $this->validator,
				'judul' => "Form Tambah User",
				'nama_lengkap' => $this->session->get('nama_lengkap'),
				'level' => $this->session->get('level'),
				'username' =>$this->session->get('username')
			];
            return $this->renderView('admin/user/form',$data);
		}
 
	}

}