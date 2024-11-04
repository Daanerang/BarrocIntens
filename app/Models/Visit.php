<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visit extends Model
{
    use HasFactory;

    protected $table = 'visits';
    protected $primaryKey = 'VisitId';

    protected $fillable = [
        'CustomerId',
        'EmployeeId',
        'RoleId',
        'VisitDate',
        'Type',
        'FaultDetails',
        'Address', // Corrected spelling
        'UsedMaterials',
    ];
}
