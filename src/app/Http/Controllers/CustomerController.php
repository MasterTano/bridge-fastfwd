<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerUpdateRequest;
use App\Services\Customer\UpdateCustomerSevice;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CustomerController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerUpdateRequest $request, $id)
    {
        try {
            (new UpdateCustomerSevice())->update($id, $request->validated());

            return response()->json(['message' => 'Success!']);

        } catch (ModelNotFoundException $e) {

            return response()->json(['message' => 'Customer not found']);

        };
    }

}
