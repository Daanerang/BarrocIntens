<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';
    protected $primaryKey = 'InvoiceId';

    protected $fillable = [
        'customerId',
        'employeeId',
        'invoice_date',
        'amount',
        'is_paid'
    ];
}
