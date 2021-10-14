<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Http\Request;
use Prewk\Result;
use Prewk\Result\Ok;

class CustomerService
{
    /**
     * @param Request $request
     * @return Result
     */
    public function addCustomer(Request $request): Result
    {
        $customer = new Customer();

        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->nic = $request->nic;
        $customer->email = $request->email;
        $customer->birthday = $request->birthday;

        $customer->save();

        return new Ok($customer);

    }

    public function updateCustomer(Request $request, $id): Result
    {
        $customer = Customer::find($id);

        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->nic = $request->nic;
        $customer->email = $request->email;
        $customer->birthday = $request->birthday;

        $customer->save();

        return new Ok($customer);

    }
}
