<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';

    public function saveData($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function getData($email, $id = true)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->where('email', $email)->first();
        }
    }

    public function deleteData($id)
    {
        $query = $this->db->table($this->table)->delete(array('email' => $id));
        return $query;
    }
}
