<?php

namespace App\Models\Configuration\room;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promocode extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'property_id',
        'room_type',
        'start_date',
        'end_date',
        'code',
        'discount',
        'created_by',
        'updated_time',
        'updated_by',
        'deleted_by',
    ];

    public function property() {
        return $this->belongsTo(\App\Models\Configuration\Property::class, 'property_id');
    }
}
