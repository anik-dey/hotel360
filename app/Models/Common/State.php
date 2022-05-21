<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_id',
        'name',
        'bn_name',
        'url',
    ];
    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
    public function cities()
    {
        return $this->hasMany(City::class,'state_id');
    }
}
