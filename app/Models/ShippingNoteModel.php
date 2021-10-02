<?php

namespace App\Models;

use CodeIgniter\Model;

class ShippingNoteModel extends Model
{
    protected $table = 'shipping_note';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = [
        'id', 'order_id', 'shipping_id', 'delivery_date', 'delivery_cost', 'created_at',
        'modified_at'
    ];
}
