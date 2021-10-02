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
            // $lstRandomProduct = array_rand($lstProduct, 5);
            $product = $productModel->getById($pid);
            $imageDetail = $imageModel->getByProductId($pid);
            $lstRelateProduct = $productModel->getByCategoryId($product[0]['category_id']);
            $lstHotProduct = $productModel->getHotProduct();
            $categoryName = $categoryModel->getById($product[0]['category_id'])[0]['name'];
            if ($product[0]['view'] == null) {
                $product[0]['view'] = 1;
            } else {
                $product[0]['view']++;
            }
            $res = $productModel->save($product[0]);
            foreach ($lstRelateProduct as $index => $lst) {
                if (isset($lst['id'])) {
                    $discount_percent = $discountModel->getById($lst['discount_id'])[0]['discount_percent'];
                    $lstRelateProduct[$index]['discount_percent'] = $discount_percent;
                    $lstRelateProduct[$index]['price_discount'] = floor($lst['price'] * (1 - $discount_percent / 100));
                }
            }
            foreach ($lstHotProduct as $index => $lst) {
                if (isset($lst['id'])) {
                    $discount_percent = $discountModel->getById($lst['discount_id'])[0]['discount_percent'];
                    $lstHotProduct[$index]['discount_percent'] = $discount_percent;
                    $lstHotProduct[$index]['price_discount'] = floor($lst['price'] * (1 - ($discount_percent / 100)));
                }
            }
            $discount_percent = $discountModel->getById($product[0]['discount_id'])[0]['discount_percent'];
            $product[0]['price_discount'] = floor($product[0]['price'] * (1 - $discount_percent / 100));
            $product['imageDetail'] = $imageDetail;
            $product['categoryName'] = $categoryName;
            $data['title'] = $product[0]['name'];
            $data['product'] = $product;
            $data['lstRelateProduct'] = $lstRelateProduct;
            $data['lstHotProduct'] = $lstHotProduct;
            // var_dump($lstHotProduct);
        }
        return view("productDetail", $data);
    }
}
