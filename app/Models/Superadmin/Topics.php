<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model {
    use HasFactory;
    protected $fillable = [
        'title',
        'details',
        'image',
        'status',
    ];
}
