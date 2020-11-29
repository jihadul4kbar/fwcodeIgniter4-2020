<?php namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model{
	
	protected $table = 'user';
	protected $allowedFields = ['iduser','nama_lengkap','username','password','level'];
}