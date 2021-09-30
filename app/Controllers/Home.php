<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\DiscountModel;
use App\Models\ProductModel;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Home";
		$productModel = new ProductModel();
		$categoryModel = new CategoryModel();
		$discountModel = new DiscountModel();
		$lstCate = $categoryModel->getAll();
		$lstNewProduct = [];
		foreach ($lstCate as $index => $cate) {
			$lstProductByCate = $productModel->getByCategoryId($cate['id']);
			$lstProductByCate['cate_name'] = $cate['name'];
			foreach ($lstProductByCate as $index => $lst) {
				if (isset($lst['id'])) {
					$discount_percent = $discountModel->getById($lst['discount_id'])[0]['discount_percent'];
					$lstProductByCate[$index]['discount_percent'] = $discount_percent;
				}
			}
			array_push($lstNewProduct, $lstProductByCate);
		}
		$data['lstNewProduct'] = $lstNewProduct;
		return view("home", $data);
	}
}
