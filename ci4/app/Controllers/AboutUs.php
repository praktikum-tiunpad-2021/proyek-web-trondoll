<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserProfilModel;

class AboutUs extends BaseController
{
    public function aboutus()
    {
        $model = new UserProfilModel();
        $data['users'] = $model->getUsers(session()->get('email'));
        return view('aboutus', $data);
    }

    public function aboutusNotLogin()
    {
        return view('aboutus2');
    }
}