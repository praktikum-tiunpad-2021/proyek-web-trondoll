<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod()  == 'post') {
            // Lets do the validation here
            $rules = [
                'email_user' => 'required|min_length[6]|max_length[50]|valid_email',
                'password_user' => 'required|min_length[8]|max_length[255]|validateUser[email_user,password_user]',

            ];

            $errors = [
                'password_user' => [
                    'validateUser' => 'Email or Password don\'t match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();

                $user = $model->where('email_user', $this->request->getVar('email_user'))
                    ->first();

                $this->setUserSession($user);
                return redirect()->to('/');
            }
        }
        return view('login', $data);
    }

    public function setUserSession($user)
    {
        $data = [
            'email_user' => $user['email_user'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            // validation
            $rules = [
                'email_user' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                // 'password_user' => 'required|min_length[8]|max_length[100]',
                // 'password_confirm' => 'matches[password_user] ',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();

                $newData = [
                    // Data yang akan diinput
                    'email_user' => $this->request->getVar('email_user'),
                    'password_user' => $this->request->getVar('password_user'),
                ];

                $model->ignore(true)->insert($newData);
                $session = session();
                $session->setFLashdata('success', 'Successful Registration');

                return redirect()->to('/');
            }
        }
        return view('regis', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
