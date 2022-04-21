<?php

namespace App\Models;

use CodeIgniter\Model;

class KambefinanceModel extends Model
{
    protected $table = 'user';

    public function getUser($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['email_user' => $id]);
        }
    }

    // Insert Data
    public function saveCustomer($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    // Update Data
    public function updateCustomer($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('email_user' => $id));
        return $query;
    }

    // Delete Data
    public function deleteCustomer($id)
    {
        $query = $this->db->table($this->table)->delete(array('email_user' => $id));
        return $query;
    }
}
