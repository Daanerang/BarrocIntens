<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quotes';
    protected $primaryKey = 'QuoteId';

    protected $fillable = [
        'CustomerId',
        'EmployeeId',
        'Status',
        'QuoteDate'
    ];
}