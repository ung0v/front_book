<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\DiscountModel;
use App\Models\ImageModel;
use App\Models\ProductModel;

class ProductDetail extends BaseController
{
    public function index()
    {
        $data = [];
        if (isset($_GET['pid'])) {

            $pid = $_GET['pid'];
            $productModel = new ProductModel();
            $imageModel = new ImageModel();
            $categoryModel = new CategoryModel();
            $discountModel = new DiscountModel();

            $lstProduct = $productModel->getAll();
            $lstRandomProduct = array_rand($lstProduct, 5);
            $product = $productModel->getById($pid);
            $imageDetail = $imageModel->getByProductId($pid);
            $lstRelateProduct = $productModel->getByCategoryId($product[0]['category_id']);
            $categoryName = $categoryModel->getById($product[0]['category_id'])[0]['name'];
            foreach ($lstRelateProduct as $index => $lst) {
                if (isset($lst['id'])) {
                    $discount_percent = $discountModel->getById($lst['discount_id'])[0]['discount_percent'];
                    $lstRelateProduct[$index]['discount_percent'] = $discount_percent;
                }
            }
            $product['imageDetail'] = $imageDetail;
            $product['categoryName'] = $categoryName;
            $data['title'] = $product[0]['name'];
            $data['product'] = $product;
            $data['lstRelateProduct'] = $lstRelateProduct;
            var_dump($lstRandomProduct);
        }
        return view("productDetail", $data);
    }
}
