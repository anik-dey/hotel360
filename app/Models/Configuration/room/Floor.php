<?php

namespace App\Models\configuration\room;

use App\Models\Configuration\room\Room_list;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Floor extends Model {
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'property_id',
        'floor_name',
        'status',
        'created_by',
        'updated_time',
        'updated_by',
        'deleted_by',
    ];

    public function property() {
        return $this->belongsTo(\App\Models\Configuration\Property::class, 'property_id');
    }

    public function room_lists() {
        return $this->hasMany(Room_list::class, 'floor_id');
    }
}
