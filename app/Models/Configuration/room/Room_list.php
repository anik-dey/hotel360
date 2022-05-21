<?php

namespace App\Models\Configuration\room;

use App\Models\Configuration\room\Floor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room_list extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'property_id',
        'floor_id',
        'room_type',
        'room_number',
        'rate',
        'bed_ex_charge',
        'ex_person_charge',
        'capacity',
        'extra_capacity',
        'room_description',
        'reseeve_condition',
        'created_by',
        'updated_time',
        'updated_by',
        'deleted_by',
    ];

    public function property() {
        return $this->belongsTo(\App\Models\Configuration\Property::class, 'property_id');
    }

    public function setAminitiesAttribute($value)
    {
        $this->attributes['aminities'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['aminities'] = json_decode($value);
    }

    public function floors() {
        return $this->belongsTo(Floor::class, 'floor_id')->withDefault();
    }
}
