<?php

namespace App\Models\Configuration\CommonSettings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'email_verification',
        'phone_verification',
        'guest_image',
        'nid',
        'foreigner_client_passport',
        'foreigner_client_passport_attachment',
        'foreigner_client_visa',
        'foreigner_client_visa_attachment',
    ];
}
