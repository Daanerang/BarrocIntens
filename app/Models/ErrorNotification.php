<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorNotification extends Model
{
    use HasFactory;

    protected $table = 'error_notification';
    protected $primaryKey = 'NotificationId';

    protected $fillable = [
        'customerId',
        'employeeId',
        'notification_date',
        'status'
    ];
}
