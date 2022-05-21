<?php

namespace App\Models\Human_Resource;

use App\Models\Configuration\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model {
    use HasFactory;
    protected $fillable = [
        'property_id',
        'name',
        'created_by',
        'updated_time',
        'updated_by',
    ];

    public function property() {
        return $this->belongsTo(Property::class, 'property_id');
    }

}
