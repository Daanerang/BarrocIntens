<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorNotification extends Model
{
    use HasFactory;

    protected $table = 'error_notification';
    protected $primaryKey = 'notification_id';

    protected $fillable = [
        'customer_id',
        'employee_id',
        'notification_date',
        'status'
    ];
}
