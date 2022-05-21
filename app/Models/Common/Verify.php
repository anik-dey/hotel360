<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verify extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'code',
    ];
}
