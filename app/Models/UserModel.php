<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = ['id', 'username', 'password', 'role', 
                                'first_name', 'last_name', 'phone_number',
                                'address', 'email', 'status', 'created_at',
                                'modified_at'];
}