<?php

namespace App\Models;

use CodeIgniter\Model;

class UserProfilModel extends Model
{
    protected $table = 'users';

    public function getUsers($nama, $id = true)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            // return $this->getWhere(['email' => $id]);
            return $this->where('email', $nama)->first();
        }
    }

    public function updateUsers($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('email' => $id));
        return $query;
    }
}
