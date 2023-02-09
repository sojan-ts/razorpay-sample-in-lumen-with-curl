<html>
    <body>
        
<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_M6Lobsf0B6wY2j",
    "amount": "50000",
    "currency": "INR",
    "name": "Sojan Sir",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_LEGxWVxzAPhd6r",
    "handler": function (response){
        console.log("order id : "+response.razorpay_order_id)
        console.log("payment id : "+response.razorpay_payment_id)
        console.log("signature : "+response.razorpay_signature)

        // alert(response.razorpay_order_id);
        // alert(response.razorpay_payment_id);
       
        // alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "Sojan T.S",
        "email": "sojants7@gmail.com",
        "contact": "1111111111"
    },
    "notes": {
        "address": "Example Address"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);

});
// document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
//     e.preventDefault();
// }

</script>
</body>
</html>

