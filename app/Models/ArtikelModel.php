<?php namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
	protected $table = 'artikel';

	public function getArtikel($id = false)
    {
        if($id === false){
            // return $this->table('artikel')
            //             ->join()
            //             ->get()
            //             ->getResultArray();

            return $this->table('artikel')
                        ->select('*')
                        ->join('kategori','kategori.id_kategori = artikel.id_kategori')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('artikel')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

	public function saveData($data){
        $query = $this->db->table('artikel')->insert($data);
        return $query;
    }
    public function updateData($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteData($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}