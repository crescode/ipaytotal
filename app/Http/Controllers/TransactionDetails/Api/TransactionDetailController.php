<?php

namespace App\Http\Controllers\TransactionDetails\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function store(Request $request)
    {
        // You can call our API following curl post example
        $url = "https://ipaytotal.solutions/api/transaction";
        $key = "6874nyRV9hTefiHMeJc03aExTqcQ5MwNZMdO9O5grNUjGjl9ESNNlOlWkCOj0KhZc5Rd";
// Fill with real customer info
        $data = [
            'api_key' => $key,
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'sulte_apt_no' => 'ORDER-78544646461235',
            'country' => 'US',
            'state' => 'NY', // if your country US then use only 2 letter state code.
            'city' => 'New York',
            'zip' => '38564',
            'ip_address' => '192.168.168.4',
            'birth_date' => '06/12/1990',
            'email' => 'test@gmail.com',
            'phone_no' => '+91999999999',
            'card_type' => '2', // See your card type in list
            'amount' => '10.00',
            'currency' => 'USD',
            'card_no' => '4242 4242 4242 4242',
            'ccExpiryMonth' => '00',
            'ccExpiryYear' => '2021',
            'cvvNumber' => '123',
            'shipping_first_name' => 'First Name',
            'shipping_last_name' => 'Last Name',
            'shipping_address' => 'Address',
            'shipping_country' => 'US',
            'shipping_state' => 'NY',
            'shipping_city' => 'New York',
            'shipping_zip' => '35656',
            'shipping_email' => 'test@gmail.com',
            'shipping_phone_no' => '+91999999999',
            'response_url' => 'https://yourdomain.com/callback.php',
            'webhook_url' => 'https://yourdomain.com/notification.php',
        ];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER,[
            'Content-Type: application/json'
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        $responseData = json_decode($response);

        print_r($responseData);
    }
}
