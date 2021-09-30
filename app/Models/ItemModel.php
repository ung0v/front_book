<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'import_items';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = ['id', 'product_id', 'import_id','quantity','total','created_at','modified_at'];
}