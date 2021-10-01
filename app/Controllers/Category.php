<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\DiscountModel;
use App\Models\ProductModel;

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
            $lstProduct = $productModel->paginationResult('category', $cateID, $offset, $records_per_page);
            $data['lstProduct'] = $lstProduct;
        } else if (isset($_GET['discountID'])) {
            $discountID = $_GET['discount_percent'];
            $lstProduct = $productModel->paginationResult('discount', $discountID, $offset, $records_per_page);
            $data['lstProduct'] = $lstProduct;
        } else {
            $lstProduct = $productModel->paginationResult('', 0, $offset, $records_per_page);
        }
        foreach ($lstProduct as $index => $lst) {
            if (isset($lst['id'])) {
                $discount_percent = $discountModel->getById($lst['discount_id'])[0]['discount_percent'];
                $lstProduct[$index]['discount_percent'] = $discount_percent;
            }
        }
        $total_rows = count($lstProduct);
        $total_pages = ceil($total_rows / $records_per_page);
        $data['total_pages'] = $total_pages;
        $data['page'] = $page;
        $data['lstProduct'] = $lstProduct;
        return view("category", $data);
    }
}
