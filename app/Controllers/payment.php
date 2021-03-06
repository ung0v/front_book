<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\ShippingModel;

class Payment extends BaseController
{
    public function index()
    {
        $vnp_TmnCode = "METX8XKF"; //Website ID in VNPAY System
        $vnp_HashSecret = "BFNQEQGKUMIHFGBXFCQLBUDIQSICGMQB"; //Secret key
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost/vnpay_php/vnpay_return.php";
        $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
        //Config input format
        //Expire
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        $vnp_TxnRef = $_GET['vnp_TxnRef'];
        $vnp_Amount = $_GET['vnp_Amount'];
        $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
        $vnp_ResponseCode = $_GET['vnp_ResponseCode'];
        $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
        $vnp_BankCode = $_GET['vnp_BankCode'];
        $vnp_PayDate = $_GET['vnp_PayDate'];
        
        $shippingModel = new ShippingModel();
        $lstShip = $shippingModel->getAll();
        $data['lstShip'] = $lstShip;
        if ($secureHash == $vnp_SecureHash) {
            if ($_GET['vnp_ResponseCode'] == '00') {                
                session_start();
                $order_id = $_SESSION['order_id'];
                $orderModel = new OrderModel();
                $res = $orderModel->save([
                    'id' => $order_id,
                    'payment_status' => 1
                ]);
                if ($res) {
                    $data['success'] = "Thanh To??n th??nh c??ng, ch??ng t??i s??? li??n h??? v???i b???n s???m nh???t c?? th???";
                } else {
                    $data['error'] = "???? x???y ra l???i !! N???u x???y ra l???i vui l??ng li??n h??? nh?? s??ch";
                }
            } else {                
                $data['error'] = "Hu??? giao d???ch !! N???u x???y ra l???i vui l??ng li??n h??? nh?? s??ch";
            }
        }
        return view("cart", $data);
    }
}
