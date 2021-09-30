<?php

namespace App\Models;

use CodeIgniter\Model;

class DiscountModel extends Model
{
    protected $table = 'discount';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = [
        'id', 'name', 'discount_percent', 'active', 'created_at',
        'modified_at'
    ];
    public function getAll()
    {
        return $this->findAll();
    }
    public function getById($disId)
    {
        return $this->where('id', $disId)->find();
    }
}
