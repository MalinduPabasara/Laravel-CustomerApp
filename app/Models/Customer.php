<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
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
