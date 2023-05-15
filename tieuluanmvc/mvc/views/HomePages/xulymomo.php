<?php
function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}


$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


$partnerCode = 'MOMOYYCJ20220530';
$accessKey = 'FbR4p3qqoz1bwCAQ';
$secretKey = 'lVXCTRdGRjrV4BkcuQ0QsiUz7HMWAoQp';
$orderInfo = "Thanh toán qua MoMo";
$amount = "11000";
$orderId = time() ."";
$redirectUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
$ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
$extraData = "";


if (!empty($_POST)) {
    $partnerCode = $_POST["partnerCode"];
    $accessKey = $_POST["accessKey"];
    $secretkey = $_POST["secretKey"];
    $orderId = $_POST["orderId"]; // Mã đơn hàng
    $orderInfo = $_POST["orderInfo"];
    $amount = $_POST["amount"];
    $ipnUrl = $_POST["ipnUrl"];
    $redirectUrl = $_POST["redirectUrl"];  //returulr
    $extraData = $_POST["extraData"]; //returulr 2 cái set gióng nhau

    $requestId = time() . "";
    $requestType = "captureWallet";
    $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $serectkey);
    $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    //Just a example, please check more in there

    header('Location: ' . $jsonResult['payUrl']);
}
?>