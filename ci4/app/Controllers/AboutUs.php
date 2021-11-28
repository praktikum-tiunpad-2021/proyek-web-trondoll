<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserProfilModel;

class AboutUs extends BaseController
{
    public function aboutus()
    {
        return view('aboutus');
    }
}