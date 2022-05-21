<?php

namespace App\Models\Configuration\PaymentSettings;

use App\Models\Configuration\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'name',
        'api',
        'description',
        'username',
        'password',
        'key',
        'status',
        'created_by',
        'updated_time',
        'updated_by',
    ];

    public function property(){
        return $this->belongsTo(Property::class, 'property_id');
    }
}
