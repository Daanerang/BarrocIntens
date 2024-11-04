<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bezoek extends Model
{
    use HasFactory;

    protected $table = 'bezoek';
    protected $primaryKey = 'BezoekId';

    protected $fillable = [
        'KlantId',
        'MedewerkerId',
        'role_id',
        'Bezoekdatum',
        'Type',
        'Storingsdetails',
        'Adres',
        'GebruikteOnderdelen'
    ];
}
