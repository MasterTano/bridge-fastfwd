<?php


namespace App\Services\Customer;


use App\Customer;

class GetMatchedCustomer
{
    public function get()
    {
        return Customer::with('sourceA')->active()->get();
    }
}
