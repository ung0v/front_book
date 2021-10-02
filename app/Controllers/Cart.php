<?php

namespace App\Controllers;

use App\Models\OrderItemModel;
use App\Models\OrderModel;
use App\Models\ShippingModel;
use App\Models\ShippingNoteModel;

class Cart extends BaseController
{
    public function index()
    {

        $data['title'] = "Giỏ hàng";
        $shippingModel = new ShippingModel();
        $shippingNoteModel = new ShippingNoteModel();
        $lstShip = $shippingModel->getAll();
        $data['lstShip'] = $lstShip;

        if ($this->request->getMethod() == 'post') {
            $orderModel = new OrderModel();
            $orderItemModel = new OrderItemModel();
            session_start();
            $user_id = $_SESSION['user']['id'];
            if ($user_id == null) {
                echo "<script>alert('Vui lòng đăng nhập để sử dụng tính năng này!!')</script>";
                return view("cart", $data);
            }
            $total = $this->request->getVar('subtotal');
            $data = [
                'user_id' => '11',
                'payment_status' => 0,
                'total' => $total,
                'created_at' => date("Y-m-d h:i:s")
            ];
            $newOrder = $orderModel->insert($data);
            $product_ids = $this->request->getVar('product_ids');
            $product_quantities = $this->request->getVar('product_quantities');
            if ($total == 30000) {
                $data['lstShip'] = $lstShip;
                $data['error'] = "Không có sản phẩm trong giỏ hàng, hãy shopping";
                return view('cart', $data);
            }
            foreach ($product_ids as $index => $product_id) {
                $data_order = [
                    'order_id' => $newOrder,
                    'product_id' => $product_id,
                    'quantity' => $product_quantities[$index],
                    'created_at' => date("Y-m-d h:i:s")
                ];
                $orderItemModel->save($data_order);
            }
            $delivery_cost = $this->request->getVar('delivery_cost');
            $shipping_id = $this->request->getVar('shipping_id');
            $data_shipping = [
                "order_id" => $newOrder,
                "shipping_id" => $shipping_id,
                'delivery_date' => date("Y-m-d", strtotime('tomorrow')),
                'delivery_cost' => $delivery_cost,
                'created_at' => date("Y-m-d h:i:s"),
            ];
            $res = $shippingNoteModel->save($data_shipping);
            if ($res) {
                $data['lstShip'] = $lstShip;
                $data['success'] = "Đặt hàng thành công!! Chúng tôi sẽ liên lạc sớm nhất có thể với bạn.";
            } else {
                $data['lstShip'] = $lstShip;
                $data['error'] = "Đã xảy ra lỗi!! Vui lòng thử lại.";
            }
        }
        return view("cart", $data);
    }
}
