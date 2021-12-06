<?php

namespace App\Models;

use CodeIgniter\Model;

class KonsultasiModel extends Model
{
    protected $table = 'konsultasi';

    // Insert Data
    public function saveData($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}
