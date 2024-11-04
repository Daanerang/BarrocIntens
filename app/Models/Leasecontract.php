<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leasecontract extends Model
{
    use HasFactory;

    protected $table = 'leasecontract';
    protected $primaryKey = 'Leasecontract_id';

    protected $fillable = [
        'customer_id',
        'employee_id',
        'start_date',
        'end_date',
        'payment_method',
        'machine_quantity',
        'notice_period',
        'status'
    ];
}
