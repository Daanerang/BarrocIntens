<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';
    protected $primaryKey = 'invoice_id';

    protected $fillable = [
        'customer_id',
        'employee_id',
        'invoice_date',
        'amount',
        'is_paid'
    ];
}
