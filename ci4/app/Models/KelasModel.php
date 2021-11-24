<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';

    // Select Data
    public function getKelas($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
    }

    private function setKelasSession($kelas)
    {
        $data = [
            'nama' => $kelas['nama'],
        ];
        session()->set($data);
        return true;
    }

    public function getData($nama, $id = true)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->where('nama', $nama)->first();
            // return $this->where(['nama' => $nama])->get()->getResultArray();
        }
    }

    public function saveData($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}
