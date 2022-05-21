<?php

namespace App\Models\Configuration\Notice;

use App\Models\Configuration\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'title',
        'body',
        'start_date',
        'expire_date',
        'user_role',
        'created_by',
        'updated_time',
        'updated_by',
    ];

    public function property(){
        return $this->belongsTo(Property::class);
    }
}
