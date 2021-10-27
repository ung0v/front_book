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
            if (!isset($_SESSION['user'])) {
                echo "<script>alert('Vui lòng đăng nhập để sử dụng tính năng này!!')</script>";
                return view("login", $data);
            }
            $user_id = $_SESSION['user']['id'];
            $total = $this->request->getVar('subtotal');
            $vnp_Amount = $total * 100;
            $data = [
                'user_id' => $user_id,
                'payment_status' => 0,
                'total' => $total,
                'created_at' => date("Y-m-d h:i:s")
            ];
            $newOrder = $orderModel->insert($data);
            $_SESSION['order_id'] = $newOrder;
            $product_ids = $this->request->getVar('product_ids');
            $product_quantities = $this->request->getVar('product_quantities');
            // var_dump($data);
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
            $payment_type = $this->request->getVar('payment_type');
            if ($payment_type == 1) {

                $vnp_TmnCode = "METX8XKF"; //Website ID in VNPAY System
                $vnp_HashSecret = "BFNQEQGKUMIHFGBXFCQLBUDIQSICGMQB"; //Secret key
                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                $vnp_Returnurl = "http://localhost/front_book/public/payment";
                $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
                //Config input format
                //Expire
                $startTime = date("YmdHis");
                $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => "vn",
                    "vnp_OrderInfo" => "Thanh toan don hang",
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => date("YmdHis"),
                );
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                header('Location: ' . $vnp_Url);
                die();
            }
        }
        return view("cart", $data);
    }
}
