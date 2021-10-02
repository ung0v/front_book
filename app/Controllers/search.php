<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\DiscountModel;
use App\Models\ProductModel;

class Search extends BaseController
{
    public function index()
    {
        $key = '';
        if (isset($_GET['key'])) {
            $key = $_GET['key'];
        }
        $productModel = new ProductModel();
        $categoryModel = new CategoryModel();
        $discountModel = new DiscountModel();
        $lstCategory = $categoryModel->getAll();
        $lstDiscount = $discountModel->getAll();
        $data['lstDiscount'] = $lstDiscount;
        $data['lstCategory'] = $lstCategory;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $records_per_page = 5;
        $offset = ($page - 1) * $records_per_page;

        $lstProduct = $productModel->getProductByKey($key, $offset, $records_per_page);

        foreach ($lstProduct as $index => $lst) {
            if (isset($lst['id'])) {
                $discount_percent = $discountModel->getById($lst['discount_id'])[0]['discount_percent'];
                $lstProduct[$index]['discount_percent'] = $discount_percent;
                $lstProduct[$index]['price_discount'] = floor($lst['price'] * (1 - $discount_percent / 100));
            }
        }
        $total_rows = $productModel->countByKey($key);
        $total_pages = ceil($total_rows / $records_per_page);
        $data['total_pages'] = $total_pages;
        $data['page'] = $page;
        $data['lstProduct'] = $lstProduct;
        echo view('category', $data);
    }
}
