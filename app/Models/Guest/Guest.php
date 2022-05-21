<?php

namespace App\Models\Guest;

use App\Models\Common\Country;
use App\Models\Common\State;
use App\Models\Common\City;
use App\Models\Common\Thana;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'name',
        'phone',
        'email',
        'dob',
        'profession',
        'nid',
        'is_native',
        'nationality',
        'passport_no',
        'visa_no',
        'desh',
        'state',
        'city',
        'zipcode',
        'landmark',
        'image',
        'passport_attach',
        'visa_attach',
        'is_email_verify',
        'is_phone_verify'
    ];

    public function country() {
        return $this->belongsTo(Country::class, 'desh');
    }

    public function state() {
        return $this->belongsTo(State::class, 'state');
    }

    public function city() {
        return $this->belongsTo(City::class, 'city');
    }

    public function zipcode() {
        return $this->belongsTo(Thana::class, 'zipcode');
    }
}
