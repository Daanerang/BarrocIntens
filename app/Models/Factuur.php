<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factuur extends Model
{
    use HasFactory;

    protected $table = 'factuur';
    protected $primaryKey = 'FactuurId';

    protected $fillable = [
        'KlantId',
        'MedewerkerId',
        'FactuurDatum',
        'Bedrag',
        'IsBetaald'
    ];
}

