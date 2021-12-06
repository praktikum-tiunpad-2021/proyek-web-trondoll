<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserProfilModel;

class Home extends BaseController
{
    public function index()
    {
        return view('landingpage1');
    }

    public function afterlogin()
    {
        $model = new UserProfilModel();
        $data['users'] = $model->getUsers(session()->get('email'));
        return view('landingpage2', $data);
    }

    // public function kelas()
    // {
    //     $model = new UserProfilModel();
    //     $data['users'] = $model->getUsers(session()->get('email'));
    //     return view('\kelas\kelas1', $data);
    // }

    public function profil()
    {
        $model = new UserProfilModel();
        $data['users'] = $model->getUsers(session()->get('email'));
        return view('profil.php', $data);
    }

    public function getKeterangan()
    {

        return view('landingpage');
    }
}
