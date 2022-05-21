<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'user_id',
        'guest_id',
        'details',
    ];
}
