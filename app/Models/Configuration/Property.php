<?php

namespace App\Models\Configuration;

use App\Models\Common\Currency;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model {
    use HasFactory;
    protected $fillable = [
        'user_id',
        'currency_id',
        'name',
        'start_date',
        'logo',
        'website',
        'phone',
        'alt_phone',
        'country_id',
        'state_id',
        'city_id',
        'thana_id',
        'address',
        'timezone',
    ];

    public function room() {
        return $this->hasMany(\App\Models\configuration\room\Floor::class, 'property_id');
    }
    public function department() {
        return $this->hasMany(\App\Models\Human_Resource\Department::class, 'property_id');
    }

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function currency() {
        return $this->belongsTo(Currency::class, 'currency_id')->withDefault();
    }

    public function employees() {
        return $this->hasMany(\App\Models\Human_Resource\Employee::class, 'property_id');
    }

    public function getStartDateAttribute($value) {
        return Carbon::parse($value)->format('d-M-Y');
    }

    public function payMethod() {
        return $this->hasMany(\App\Models\Configuration\master\PayMethod::class, 'property_id');
    }

    public function identity() {
        return $this->hasMany(\App\Models\Configuration\master\Identity::class, 'property_id');
    }

    public function reservasionType() {
        return $this->hasMany(\App\Models\Configuration\master\ReservasionType::class, 'property_id');
    }

    public function mealPlan() {
        return $this->hasMany(\App\Models\Configuration\master\MealPlan::class, 'property_id');
    }

    public function extraCharge() {
        return $this->hasMany(\App\Models\Configuration\master\ExtraCharge::class, 'property_id');
    }
}
