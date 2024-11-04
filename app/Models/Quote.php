<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quote';
    protected $primaryKey = 'quote_id';

    protected $fillable = [
        'customer_id',
        'employee_id',
        'status',
        'quote_date'
    ];
}
