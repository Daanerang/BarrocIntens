<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roll extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'Rol_id';

    protected $fillable = [
        'name'
    ];
}
