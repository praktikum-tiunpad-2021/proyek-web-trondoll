<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'email_user'; // Primary Key
    protected $allowedFields = ['email_user', 'password_user']; // ??
    protected $beforeInsert = ['hasPassword']; // ??
    protected $beforeUpdate = ['hasPassword']; // ??

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password_user']))
            $data['data']['password_user'] = password_hash($data['data']['password_user'], PASSWORD_DEFAULT);

        return $data;
    }
}
