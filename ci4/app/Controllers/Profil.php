<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserProfilModel;

class Profil extends Controller
{
    public function update()
    {
        $model = new UserProfilModel();
        $id = $this->request->getPost('email');
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'no_telp' => $this->request->getPost('no_telp'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        );

        $model->updateUsers($data, $id);
        return redirect()->to('/profil');
    }
}
