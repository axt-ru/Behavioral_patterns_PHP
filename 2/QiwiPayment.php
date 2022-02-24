<?php

class QiwiPayment implements IPayment {

    public function toPay($orderDetails)
    {
        echo "Оплата через Qiwi кошелек".PHP_EOL;
    }
}