<?php


namespace App\Services\Customer;


use App\Customer;

class UpdateCustomerSevice
{
    public function update($id, $data)
    {
        $customer = Customer::findOrFail($id);

        $customer->active = $data['active'];

        return $customer->save();
    }
}
