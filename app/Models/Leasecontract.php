<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leasecontract extends Model
{
    use HasFactory;

    protected $table = 'leasecontract';
    protected $primaryKey = 'LeasecontractId';

    protected $fillable = [
        'customerId',
        'employeeId',
        'start_date',
        'end_date',
        'payment_method',
        'machine_quantity',
        'notice_period',
        'status'
    ];
}
