<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'supplier';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = ['id', 'name','address', 'phone', 'email','created_at',
                                'modified_at'];
}