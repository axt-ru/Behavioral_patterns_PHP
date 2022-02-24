<?php

class YaPayment implements IPayment {

    public function toPay($orderDetails)
    {
        echo "Оплата через Яндекс кошелек".PHP_EOL;
    }
}