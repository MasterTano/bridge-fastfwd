<?php

namespace App\Services\Customer;

use App\Customer;

class CreateCustomerService
{
    public function create($data)
    {
        return Customer::create($data);
    }

}
