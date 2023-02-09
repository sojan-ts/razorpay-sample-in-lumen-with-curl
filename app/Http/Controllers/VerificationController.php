<?php 
namespace App\Http\Controllers;


class VerificationController extends Controller
{
    public function verifyPayment()
    {

        $orderid = "order_LEGxWVxzAPhd6r";
        $paymentid = "pay_LEGygnqPPKhzmN";
        $sig = "5aa5365182cc5fae7d63f0d952febc06037e64cdd14a1ba642cf8895125c84ba";
        
        $generated_signature = hash_hmac("sha256",$orderid."|".$paymentid, 'b1abk9iBxRwpwHZMAQU97uiP' ); // secret id at the end
    
        
          if ($generated_signature == $sig) {
            return response()->json(['status' => 'success', 'generated' => $generated_signature]);
          } else {
            return response()->json(['status' => 'failed', 'generated' => $generated_signature]);
          }
      
    }
}
