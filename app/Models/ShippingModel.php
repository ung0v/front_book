<?php

namespace App\Models;

use CodeIgniter\Model;

class ShippingModel extends Model
{
    protected $table = 'shipping';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = [
        'id', 'name', 'address', 'phone', 'email', 'created_at',
        'modified_at'
    ];
    public function getAll()
    {
        return $this->findAll();
    }
}
