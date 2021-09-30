<?php

namespace App\Models;

use CodeIgniter\Model;

class ImportsModel extends Model
{
    protected $table = 'import_coupon';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = ['id', 'supplier_id','status', 'created_at', 'modified_at'];
}