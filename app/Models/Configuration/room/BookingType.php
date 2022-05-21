<?php

namespace App\Models\Configuration\Room;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingType extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'property_id',
        'type_name',
        'created_by',
        'updated_time',
        'updated_by',
        'deleted_by',
    ];

    public function property() {
        return $this->belongsTo(\App\Models\Configuration\Property::class, 'property_id');
    }
}
