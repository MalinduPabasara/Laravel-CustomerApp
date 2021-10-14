<?php

namespace App\Transformers;

use App\Models\Customer;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     * @param Customer $customer
     * @return array
     */
    public function transform(Customer $customer)
    {
        return [
            'name' => $customer->name,
            'address' => $customer->address,
            'nic' => $customer->nic,
            'email' => $customer->email,
            'birthday' => $customer->birthday
        ];
    }
}
