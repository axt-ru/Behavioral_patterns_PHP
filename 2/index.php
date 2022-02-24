<?php
spl_autoload_register(function ($class) {
    include $class.'.php';
});

$orderDetails = new OrderDetails(1200, '5775445664');
function testStrategy($orderDetails){
    $payment = new Payment($orderDetails);

    echo "Оплата Qiwi".PHP_EOL;
    $payment->pay(new QiwiPayment());

    echo "Оплата Yandex".PHP_EOL;
    $payment->pay(new YaPayment());

    echo "Оплата WebMoney".PHP_EOL;
    $payment->pay(new WebMoneyPayment());
}
testStrategy($orderDetails);