<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    use HasFactory;

    protected $table = 'klant';
    protected $primaryKey = 'klantId';

    protected $fillable = [
        'Bedrijfsnaam',
        'Contactpersoon',
        'Telefoonnummer',
        'Adres',
        'Email',
        'BKRCheckStatus'
    ];
}
