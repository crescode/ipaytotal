<?php

namespace App\Http\Controllers\TransactionDetails\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function store(Request $request)
    {
        $url = "http://ipaytotal.solutions.v/api/test/transaction";
        $key = "16630iRX27NSvssxLrBPXJDirxT4ZZTcBW4Ajaz08qSpDiwyceDqL2jhOTjey0zfpCHa";
// Fill with real customer info
        $data = [
            'api_key' => $key,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'country' => $request->country,
            'state' => $request->state, // if your country US then use only 2 letter state code.
            'city' => $request->city,
            'zip' => $request->zip,
            'ip_address' => $request->ip_address,
            'birth_date' => $request->birth_date,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'amount' => $request->amount,
            'currency' => $request->currency,
            'response_url' => $request->response_url,
            'sulte_apt_no' => $request->sulte_apt_no,
            'card_no' => $request->card_no,
            'ccExpiryMonth' => $request->ccExpiryMonth,
            'ccExpiryYear' => $request->ccExpiryYear,
            'cvvNumber' => $request->cvvNumber,
            'shipping_first_name' => $request->shipping_first_name,
            'shipping_last_name' => $request->shipping_last_name,
            'shipping_address' => $request->shipping_address,
            'shipping_country' => $request->shipping_country,
            'shipping_state' => $request->shipping_state,
            'shipping_city' => $request->shipping_city,
            'shipping_zip' => $request->shipping_zip,
            'shipping_email' => $request->shipping_email,
            'shipping_phone_no' => $request->shipping_phone_no,
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
        echo "<pre>";
        echo "RESPONSE:";
        print_r($responseData);
        echo "</pre>";
    }
}
