<?php

interface PaymentInterface{
    public function payNow();
}

interface LoginInterface{
    public function loginFirst();
}
class Paypal implements PaymentInterface, LoginInterface {
    public function payNow() {
        echo 'payapl';
     }
    public function loginFirst() {
        echo 'payapl logged in';
    }

    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class BakTrasfer implements PaymentInterface {
    public function payNow() { 
        echo 'bank tranfer';
    }
    public function loginFirst() {
        echo 'payapl logged in';
    }

    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements PaymentInterface {
    public function payNow() {
        echo 'visa';
    }
    public function paymentProcess(){
        $this->payNow();
    }
}

class BuyProduct {
    public function pay( PaymentInterface $paymentType) {
        $paymentType->paymentProcess();

    }
    public function onlinepay( LoginInterface $paymentType) {
        $paymentType->paymentProcess();

    }


}

$paymentType = new Paypal();
$buyProduct = new BuyProduct();

$buyProduct->onlinepay($paymentType);