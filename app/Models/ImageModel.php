<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $table = 'image_product';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = ['id', 'product_id', 'image'];
    public function getByProductId($id)
    {
        return $this->where('product_id', $id)->findAll();
    }
}
