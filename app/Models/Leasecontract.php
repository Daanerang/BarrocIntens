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
        'KlantId',
        'MedewerkerId',
        'Startdatum',
        'Einddatum',
        'Betalingsoptie',
        'Aantalmachines',
        'Opzegtermijn',
        'Status'
    ];
}
