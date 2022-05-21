<?php

namespace App\Models\HouseKeeping;

use App\Models\Configuration\Property;
use App\Models\Human_Resource\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseKeeper extends Model {
    use HasFactory;
    protected $fillable = [
        'property_id',
        'employee_id',
        'status',
    ];

    public function property() {
        return $this->belongsTo(Property::class, 'property_id');
    }
    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
