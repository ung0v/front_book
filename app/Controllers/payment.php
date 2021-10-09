<?php

namespace App\Controllers;

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

        $payment = 0;
        if ($secureHash == $vnp_SecureHash) {
            if ($_GET['vnp_ResponseCode'] == '00') {
                $payment = 1;
                $data['success'] = "Thanh Toán thành công, chúng tôi sẽ liên hệ với bạn sớm nhất có thể";
            } else {
                $payment = -1;
                $data['error'] = "Đã xảy ra lỗi!! Vui lòng thử lại.";
            }
        }
        return view("cart", $data);
    }
}
