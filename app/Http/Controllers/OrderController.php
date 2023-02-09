<?php 
namespace App\Http\Controllers;


class OrderController extends Controller
{
    public function createOrder()
    {

        $key = "rzp_test_M6Lobsf0B6wY2j"; // key id
        $token = "b1abk9iBxRwpwHZMAQU97uiP"; // secret id
        $url = "https://api.razorpay.com/v1/orders";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key.":".$token);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('content-type: application/json'));
        $data = <<< JSON
        {
            "amount": 50000,
            "currency": "INR",
            "notes": {
                "name": "sojants",
                "email": "sojants7@gmail.com"
            }
        }
        JSON;
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        $js = json_decode($response);
        return response()->json($js);
      
    }
}
