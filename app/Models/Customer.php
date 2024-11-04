<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'CustomerId';

    protected $fillable = [
        'company_name',
        'contact_person',
        'phonenumber',
        'address',
        'email',
        'BKRCheckStatus'
    ];
}
