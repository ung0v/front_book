<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\DiscountModel;
use App\Models\OrderItemModel;
use App\Models\OrderModel;
use App\Models\ProductModel;

class Home extends BaseController
{
	public function index()
	{
		helper('array');
		$data['title'] = "Trang chủ";
		$productModel = new ProductModel();
		$categoryModel = new CategoryModel();
		$discountModel = new DiscountModel();
		$orderItemModel = new OrderItemModel();
		$lstCate = $categoryModel->getAll();
		$lstNewProduct = [];
		foreach ($lstCate as $index => $cate) {
			$lstProductByCate = $productModel->getByCategoryId($cate['id']);
			$lstProductByCate['cate_name'] = $cate['name'];
			foreach ($lstProductByCate as $index => $lst) {
				if (isset($lst['id'])) {
					$discount_percent = $discountModel->getById($lst['discount_id'])[0]['discount_percent'];
					$lstProductByCate[$index]['discount_percent'] = $discount_percent;
					$lstProductByCate[$index]['price_discount'] = floor($lst['price'] * (1 - $discount_percent / 100));
				}
			}
			array_push($lstNewProduct, $lstProductByCate);
		}
		$allProcuct = $productModel->getAll();
		foreach ($allProcuct as $index => $lst) {
			if (isset($lst['id'])) {
				$discount_percent = $discountModel->getById($lst['discount_id'])[0]['discount_percent'];
				$countOrder = $orderItemModel->countByProductId($lst['id']);
				$allProcuct[$index]['boughtCount'] = $countOrder;
				$allProcuct[$index]['discount_percent'] = $discount_percent;
				$allProcuct[$index]['price_discount'] = floor($lst['price'] * (1 - $discount_percent / 100));
			}
		}

		$mostBoughtProduct = array_sort_by_multiple_keys($allProcuct, [
			'boughtCount' => SORT_DESC
		]);
		$data['lstNewProduct'] = $lstNewProduct;
		$data['mostBoughtProduct'] = $allProcuct;
		return view("home", $data);
	}
}
