<?php

namespace App\Models\Human_Resource;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model {
    use HasFactory;
    protected $fillable = ['property_id','name','created_by',
    'updated_time','updated_by',];

}
