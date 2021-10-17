<?php

namespace App\Transformers;

use App\Models\Customer;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     * @param Customer $customer
     * @return array
     */
    public function transform(Customer $customer): array
    {
        return [
            'id' => $customer->id,
            'name' => $customer->name,
            'address' => $customer->address,
            'nic' => $customer->nic,
            'email' => $customer->email,
            'birthday' => $customer->birthday
        ];
    }
}
