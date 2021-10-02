<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderItemModel extends Model
{
    protected $table = 'order_items';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = [
        'id', 'order_id', 'product_id', 'quantity', 'created_at',
        'modified_at'
    ];
    public function countByProductId($pid)
    {
        return $this->where('product_id', $pid)->countAllResults();
    }
}
