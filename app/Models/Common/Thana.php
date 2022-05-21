<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_id',
        'name',
        'bn_name',
        'url',
    ];
    public function city()
    {
        return $this->belongsTo(\App\Models\Common\City::class,'city_id');
    }
}
