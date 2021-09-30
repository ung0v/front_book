<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'product_category';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = [
        'id', 'name', 'description', 'created_at',
        'modified_at'
    ];
    public function getAll()
    {
        return $this->findAll();
    }
}
