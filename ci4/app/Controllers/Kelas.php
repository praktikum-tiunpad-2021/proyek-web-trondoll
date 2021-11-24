<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KelasModel;
use App\Models\UserProfilModel;

class Kelas extends Controller
{
    public function view()
    {
        $model1 = new KelasModel();
        $model2 = new UserProfilModel();
        $data['users'] = $model2->getUsers(session()->get('email'));
        $data['kelas'] = $model1->getKelas();
        echo view('\kelas\kelas1', $data);
        // return view('\kelas\kelas1', $data);
    }

    public function detailKelas()
    {
        $model2 = new UserProfilModel();
        $data['users'] = $model2->getUsers(session()->get('email'));
        echo view('\kelas\detailKelas', $data);
    }

    public function pembayaran()
    {
        $model2 = new UserProfilModel();
        $data['users'] = $model2->getUsers(session()->get('email'));
        echo view('\kelas\pembayaran', $data);
    }

    // public function pembelianKelas()
    // {
    //     $model1 = new PembayaranModel();
    //     $model2 = new UserProfilModel();
    //     $data['users'] = $model2->getUsers(session()->get('email'));
    //     $data['kelas'] = $model1->getkelas();
    //     echo view('\kelas\pembayaran', $data);
    // }
}
