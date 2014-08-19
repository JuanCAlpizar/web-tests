<?php

$url = 'https://api.sts-pay.com/sale-rest';

$post_string = Array(
    'website_id' => $_POST['website_id'],
    'password' => $_POST['password'],
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'card_number' => $_POST['card_number'],
    'expiry_date_month' => $_POST['expiry_date_month'],
    'expiry_date_year' => $_POST['expiry_date_year'],
    'cv2' => $_POST['cv2'],
    'amount' => $_POST['amount'],
    'currecy_code' => $_POST['currecy_code'],
    'email_address' => $_POST['email_address'],
    'phone_number' => $_POST['phone_number'],
    'address1' => $_POST['address1'],
    'address2' => $_POST['address2'],
    'city' => $_POST['city'],
    'province' => $_POST['province'],
    'postal_code' => $_POST['postal_code'],
    'country_code' => $_POST['country_code'],
    'order_id' => $_POST['order_id'],
    'order_description' => $_POST['order_description'],
    'customer_id' => $_POST['customer_id'],
    'customer_ip_address' => $_POST['customer_ip_address'],
);

$post_string = http_build_query($post_string);

$curl_init = curl_init($url);

curl_setopt($curl_init, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_init, CURLOPT_USERAGENT, 'Pegasus');
curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_init, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_init, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl_init, CURLOPT_POSTFIELDS, $post_string);

$result = curl_exec($curl_init);

echo $result;