<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = [
        'id', 'name', 'image', 'description', 'author', 'SKU',
        'category_id', 'quantity', 'price', 'discount_id',
        'created_at', 'modified_at'
    ];
    public function getAll()
    {
        return $this->orderBy('created_at', 'desc')->findAll();
    }
    public function getById($id)
    {
        return $this->where('id', $id)->find();
    }
    public function getByCategoryId($cateId)
    {
        return $this->where('category_id', $cateId)->orderBy('created_at')->findAll(5);
    }
    public function getByDiscountId($discID)
    {
        return $this->where('discount_id', $discID)->orderBy('created_at')->findAll();
    }
    public function getCountResult(int $cid)
    {
        return $this->where('category_id', $cid)->countAllResults();
    }
    public function paginationResult($type, int $id, int $offset, int $records_per_page)
    {
        if ($id != 0) {
            switch ($type) {
                case 'category':
                    return $this->where('category_id', $id)->findAll($records_per_page, $offset);
                    break;
                case 'discount':
                    return $this->where('discount_id', $id)->findAll($records_per_page, $offset);
                    break;
                default:
                    return $this->findAll($records_per_page, $offset);
                    break;
            }
        }

        return $this->findAll($records_per_page, $offset);
    }
}
