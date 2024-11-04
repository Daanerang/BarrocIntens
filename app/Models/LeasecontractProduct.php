<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeasecontractProduct extends Model
{
    use HasFactory;

    protected $table = 'leasecontract_product';

    protected $fillable = [
        'LeasecontractId',
        'ProductId',
        'quantity'
    ];
}
