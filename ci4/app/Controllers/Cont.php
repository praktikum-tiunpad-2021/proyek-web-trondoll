<?php

namespace App\Controllers;

class Cont extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function regis()
    {
        return view('regis');
    }

    public function kelas()
    {
        return view('\kelas\kelas1');
    }
}
