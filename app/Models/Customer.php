<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @property mixed $name
 * @property mixed $address
 * @property mixed $nic
 * @property mixed $email
 * @property mixed $birthday
 * @property mixed $id
 */
class Customer extends Model
{
    protected $fillable = [
        'name',
        'address',
        'nic',
        'email',
        'birthday'
    ];
}
