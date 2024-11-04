<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visit extends Model
{
    use HasFactory;

    protected $table = 'visit';
    protected $primaryKey = 'id';

    protected $fillable = [
        'customerId',
        'employeeId',
        'roleId',
        'visit_date',
        'type',
        'malfunction_details',
        'adress',
        'used_parts',
    ];
}
