<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\KambefinanceModel;

class User extends Controller
{
    public function index()
    {
        $model = new KambefinanceModel();
        $data['user'] = $model->getUser();
        // echo view('user_view', $data);
    }

    public function add_new()
    {
        echo view('regis');
    }

    public function save()
    {
        $model = new KambefinanceModel();
        $data = array(
            'nama_user' => $this->request->getPost('nama_user'),
            'email_user' => $this->request->getPost('email_user'),

            // kenapa ga bisa yaa ?
            // 'konf_pass' => $this->request->getPost('konf_pass'),
            'telp_user' => $this->request->getPost('telp_user')
        );

        $model->saveCustomer($data);

        // kembali ke halaman sebelumnya
        return redirect()->to('/');
    }
}
