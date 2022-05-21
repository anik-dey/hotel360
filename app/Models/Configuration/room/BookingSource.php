<?php

namespace App\Models\Configuration\room;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingSource extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'property_id',
        'name',
        'phone',
        'email',
        'address',
        'commission_rate',
        'commission_type',
        'created_by',
        'updated_time',
        'updated_by',
        'deleted_by',
    ];

    public function property() {
        return $this->belongsTo(\App\Models\Configuration\Property::class, 'property_id');
    }
}
