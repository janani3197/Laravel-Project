<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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
        'email',
        'password',
        'role',
        'address_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Returns the caretakes that are near to this user
     */
    public function getNearbyCaretakers()
    {
        // // TODO - temporary placeholder - assume everyone is in swansea!
        // return CareTaker::where('city', 'swansea')->get();
        // return Patients::where('city', 'swansea')->get();


        
        // TODO: Once we have an address model:
        // return CareTaker::where('city', $this->address->city)->get();

        
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}


