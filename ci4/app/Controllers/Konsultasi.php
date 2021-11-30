<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KonsultasiModel;
use App\Models\UserProfilModel;

class Konsultasi extends Controller
{
    // Buat Hello, Nama ! di navbar kanan (?)
    public function view()
    {
        $model = new UserProfilModel();
        $data['users'] = $model->getUsers(session()->get('email'));
        // dd($data);
        echo view('konsultasi\konsultasi', $data);
    }

    // Insert Data
    public function save()
    {
        // Insert ke Tabel Konsultasi
        $model = new KonsultasiModel();
        $newData = array(
            'perencana_keuangan' => $this->request->getVar('perencana_keuangan'),
            'email_users' => $this->request->getPost('email_users'),
            'jenis' => $this->request->getPost('jenis'),
            'tanggal' => $this->request->getPost('date'), 
            'jam' => $this->request->getVar('jam'),
            'catatan' => $this->request->getPost('catatan'),
        );



        // $model2 = new UserProfilModel();
        // $data['users'] = $model2->getUsers(session()->get('nama'));
        $model->saveData($newData);
        return redirect()->to('/konsultasi');

        // echo "<prev>";
        // var_dump($this->request->getVar());
        // echo "</prev>";
    }

    // public function readDataUser()
    // {
    //     $model = new UserProfilModel();
    //     $data['users'] = $model->getUsers(session()->get());
    // }
}
