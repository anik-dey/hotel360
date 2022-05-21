<?php

namespace App\Models\Configuration\HouseKeeper;

use App\Models\Configuration\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'property_id',
        'name',
        'color',
        'status',
        'created_by',
        'updated_time',
        'updated_by',
        'deletd_by',
    ];

    public function property(){
        return $this->belongsTo(Property::class, 'property_id');
    }
}
