<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'state_id',
        'name',
        'bn_name',
        'lat',
        'lon',
    ];
    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }
    public function thanas()
    {
        return $this->hasMany(Thana::class,'city_id');
    }
}
