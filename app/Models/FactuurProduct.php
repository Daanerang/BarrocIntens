<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactuurProduct extends Model
{
    use HasFactory;

    protected $table = 'factuur_product';

    protected $fillable = [
        'FactuurId',
        'ProductId',
        'Aantal',
        'Prijs'
    ];
}

