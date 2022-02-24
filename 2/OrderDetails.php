<?php

class OrderDetails
{
    protected $totalPrice;
    protected $phone;

    public function __construct($phone ,$totalPrice)
    {
        $this->totalPrice = $totalPrice;
        $this->phone = $phone;
    }
}
