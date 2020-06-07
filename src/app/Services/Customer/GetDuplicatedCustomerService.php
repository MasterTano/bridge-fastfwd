<?php


namespace App\Services\Customer;


use App\Customer;

class GetDuplicatedCustomerService
{
    public function get()
    {
        return Customer::with(['sourceA', 'sourceB'])->duplicated()->get();
    }
}
