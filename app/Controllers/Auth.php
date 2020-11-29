<?php namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\Controllers;
class Auth extends BaseController{
	public function index(){
		$data = [
			'judul' => "Login Website"
		];
        echo view('admin/auth/index', $data);
	}

    public function auths (){
        $model = new AuthModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();

        // echo "<pre>";
       // print_r($data);

        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass); 
            if($verify_pass){
                $ses_data = [
                    'iduser'        => $data['iduser'],
                    'nama_lengkap'  => $data['nama_lengkap'],
                    'level'         => $data['level'],
                    'logged_in'     => TRUE
                ];
                $this->session->set($ses_data);
                return redirect()->to('/Admin');
            }else{
                $this->session->setFlashdata('pesan', 'Password Salah');
                return redirect()->to('/Auth');
            }
        }else{
            $this->session->setFlashdata('pesan', 'Username salah');
            return redirect()->to('/Auth');
        }
	}

	public function logout(){
		$this->session->destroy();
		return redirect()->to('/auth');
    }
    

    function pass(){
        echo password_hash("passwordtes",PASSWORD_DEFAULT);
    }

}