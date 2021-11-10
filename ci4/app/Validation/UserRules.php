<?php

namespace App\Validation;

use App\Models\UserModel;

class UserRules
{
    public function validateUser(string $str, string $fields, array $data)
    {
        $model = new UserModel();
        $user = $model->where('email_user', $data['email_user'])->first();
        if (!$user)
            return false;
        return password_verify($data['password_user'], $user['password_user']);
    }
}
