<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
	
	protected $table = 'user';
	
	public function getData($id = false){
		if($id === false){
			return $this->table('user')
						->get()
						->getResultArray();
		}else{
			return $this->table('user')
			            ->where('iduser', $id)
			            ->get()
			            ->getRowArray();
		}
	}
	public function saveData($data){
        $query = $this->db->table('user')->insert($data);
        return $query;
    }
}