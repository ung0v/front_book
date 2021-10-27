<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\DiscountModel;
use App\Models\ProductModel;
use CodeIgniter\API\ResponseTrait;
class Category extends BaseController
{
    public function index()
    {
        $data['title'] = "Thể loại";
        $productModel = new ProductModel();
        $categoryModel = new CategoryModel();
        $discountModel = new DiscountModel();

        $lstProduct = $productModel->getAll();
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


        if (isset($_GET['cateID'])) {
            $cateID = $_GET['cateID'];
            $total_rows = $productModel->countByCategory($cateID);
            $lstProduct = $productModel->paginationResult('category', $cateID, $offset, $records_per_page);
            $data['lstProduct'] = $lstProduct;
        } else if (isset($_GET['discount_percent'])) {
            $discountID = $_GET['discount_percent'];
            $total_rows = $productModel->countByDiscount($discountID);
            $lstProduct = $productModel->paginationResult('discount', $discountID, $offset, $records_per_page);
            $data['lstProduct'] = $lstProduct;
        } else {
            $total_rows = count($lstProduct);
            $lstProduct = $productModel->paginationResult('', 0, $offset, $records_per_page);
        }
        foreach ($lstProduct as $index => $lst) {
            if (isset($lst['id'])) {
                $discount_percent = $discountModel->getById($lst['discount_id'])[0]['discount_percent'];
                $lstProduct[$index]['discount_percent'] = $discount_percent;
                $lstProduct[$index]['price_discount'] = floor($lst['price'] * (1 - $discount_percent / 100));
            }
        }
        $total_pages = ceil($total_rows / $records_per_page);
        $data['total_pages'] = $total_pages;
        $data['page'] = $page;
        $data['lstProduct'] = $lstProduct;
        // var_dump($total_pages, count($lstProduct));
        return view("category", $data);
    }
    public function all() {
        $productModel = new ProductModel();
        $products = $productModel->getAll();
        $json = json_encode($products);
        return $json;
    }
}
