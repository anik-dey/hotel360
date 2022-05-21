<?php

namespace App\Models;

use App\Models\Human_Resource\Employee;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'is_verified',
        'password',
        'remember_token',
        'email',
        'phone',
        'userable_id',
        'userable_type',
        'employee_id',
        'status',
        'user_id'
    ];

    public function employees() {
        return $this->belongsTo(Employee::class, 'employee_id')->withDefault();
    }
    // public static function boot()
    // {
    //     parent::boot();
    //     static::saving(function($model){
    //         if(request()->password != $model->getOriginal('password') || request()->password !== '')
    //         {
    //             $model->password = Hash::make($model->password);
    //         }
    //         else
    //         {
    //             unset($model->password);
    //         }
    //     });
    // }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
