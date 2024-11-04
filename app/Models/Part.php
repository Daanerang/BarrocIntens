<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $table = 'part';
    protected $primaryKey = 'PartId';

    protected $fillable = [
        'name',
        'stock'
    ];
}
