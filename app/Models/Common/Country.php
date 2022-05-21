<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'iso',
        'name',
        'nick_name',
        'iso3',
        'num_code',
        'phone_code',
    ];
    public function states()
    {
        return $this->hasMany(State::class,'country_id');
    }
}
