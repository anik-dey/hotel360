<?php

namespace App\Models\Guest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wakeup extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'user_id',
        'date',
        'time',
        'remark',
        'is_public',
        'status',
    ];
}
