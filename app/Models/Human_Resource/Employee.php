<?php

namespace App\Models\Human_Resource;

use App\Models\Configuration\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
    use HasFactory;
    protected $fillable = [
        'property_id',
        'user_id',
        'joining_date',
        'employee_name',
        'dob',
        'father_name',
        'mother_name',
        'nid',
        'gender',
        'mobile_number',
        'address',
        'designation',
        'profile_pic',
        'signature',
        'user_role',
        'employee_status',
        'interview_date',
        'security_money',
        'basic_salary',
        'house_rent',
        'medical_allowance',
        'convenience',
        'transport_allowance',
        'mobile_allowance',
    ];

    public function properties() {
        return $this->belongsTo(Property::class, 'property_id')->withDefault();
    }

    public function users() {
        return $this->hasOne(\App\Models\User::class, 'employee_id');
    }

    public function housekeepers() {
        return $this->hasOne(\App\Models\HouseKeeping\HouseKeeper::class, 'employee_id');
    }
}
