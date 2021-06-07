<?php

interface PaymentInterface{
    public function payNow();
    public function paymentProcess();
}

interface LoginInterface{
    public function loginFirst();
    public function paymentProcess();
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

class BankTrasfer implements PaymentInterface, LoginInterface {
    public function payNow() { 
        echo 'bank tranfer';
    }
    public function loginFirst() {
        echo 'bank logged in';
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