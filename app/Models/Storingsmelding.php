<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storingsmelding extends Model
{
    use HasFactory;

    protected $table = 'storingsmelding';
    protected $primaryKey = 'MeldingId';

    protected $fillable = [
        'KlantId',
        'MedewerkerId',
        'MeldingDatum',
        'Status'
    ];
}
