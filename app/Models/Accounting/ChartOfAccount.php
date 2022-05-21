<?php

namespace App\Models\Accounting;

use App\Models\Configuration\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartOfAccount extends Model {
    use HasFactory;
    protected $fillable = [
        'account_no',
        'name',
        'property_id',
        'opening_balance',
        'parent_ac_id',
        'status',
    ];

    public function property() {
        return $this->belongsTo(Property::class, 'property_id');
    }
}
