Must have Key id and key secred inorder to proceed, paste these two inside OrderController and then key id in blade file and finally secret id in the veri.ficationController
1. first we have to create an order ID by going to '/order'
2. then we have to paste that order ID in Pay.blade.php 
3. now, its time to pay and after the payment certain values like,
   -1. payment id, order id and signature will be returned
4. now paste these in the verificationController and test it out in the '/verify'.