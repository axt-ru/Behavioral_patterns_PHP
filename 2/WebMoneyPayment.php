<?php

class WebMoneyPayment implements IPayment {

    public function toPay($orderDetails)
    {
        echo "Оплата через WebMoney кошелек".PHP_EOL;
    }
}