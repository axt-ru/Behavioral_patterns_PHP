<?php

class Payment
{
    protected OrderDetails $orderDetails;

    public function __construct(OrderDetails $orderDetails)
    {
        $this->orderDetails = $orderDetails;
    }

    public function pay(IPayment $payment){
        $payment->toPay($this->orderDetails);
    }
}