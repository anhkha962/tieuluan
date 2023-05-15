<?php

if (isset($_POST["tongtien"])) {
    $tt = $_POST["tongtien"];
    $_SESSION['ten'] = $_POST["ten"];
    $_SESSION['dc'] = $_POST["dc"];
    $_SESSION['sdt'] = $_POST["sdt"];
    // echo $_SESSION['ten'];
    // die();
}

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
/**
 * Description of vnpay_ajax
 *
 * @author xonv
 * http://localhost/TL_Copy/vnpay_return.php?
 * vnp_Amount=39000000&
 * vnp_BankCode=NCB&
 * vnp_BankTranNo=VNP13770739&
 * vnp_CardType=ATM&
 * vnp_OrderInfo=mota&
 * vnp_PayDate=20220613180212&
 * vnp_ResponseCode=00&
 * vnp_TmnCode=Y4U88XFK&
 * vnp_TransactionNo=13770739&
 * vnp_TxnRef=20220613130154&
 * vnp_SecureHashType=SHA256&vnp_SecureHash=eef9ee142f4ff7c326aa0b3830469800fd212915d4d39c7582771671f3c5e902
 */
$vnp_TmnCode = "Y4U88XFK"; //Mã website tại VNPAY 
$vnp_HashSecret = "DTHXNFNBUMNKFKQOZVHTXUXNUQUUXMTV"; //Chuỗi bí mật
$vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/tieuluanmvc/vnpay_php/vnpay_return.php";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";

$vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
$vnp_OrderInfo = 'mota';
$vnp_OrderType = 'loai';
// $t =  $ten;
// $d =  $dc;
// $s =  $sdt;
$vnp_Amount = str_replace(',', '',  $tt) * 100;
$vnp_Locale = 'vn';
$vnp_BankCode = '';
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];


$inputData = array(
    // "ten" => $t,
    // "dc" => $d,
    // "sdt" => $s,
    "vnp_Version" => "2.0.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}
ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . $key . "=" . $value;
    } else {
        $hashdata .= $key . "=" . $value;
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
   // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
   	$vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
    $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
}
$returnData = array('code' => '00'
    , 'message' => 'success'
    , 'data' => $vnp_Url);
    header('Location: ' . $vnp_Url);

