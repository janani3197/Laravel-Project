<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address_id',
    ];

    // User::role('Patient')->get();

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
    // public function getNearbyCaretakers()
    // {
    //     // TODO - temporary placeholder - assume everyone is in swansea!
    //     // return CareTaker::where('city', 'swansea')->get();
    //     // return Patients::where('city', 'swansea')->get();


        
    //     // TODO: Once we have an address model:
    //     // return CareTaker::where('city', $this->address->city)->get();

        
    // }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }



    public function getCarerTakersInSameCity()
    {
        $city = Auth::user()->address->city;
        return User::role('Care taker') 
        ->whereHas('address', function($query) use ($city) {
            $query->where('city', $city);
        })->get();
        
        // return User::role('Care taker')
        //     ->whereRelation('address', 'city', $this->city)
        //     ->where('id', '!=', $this->id)
        //     ->get([
        //         'name'
        //     ]);
    }


    public function Booking()
    {
        return $this->hasMany(Booking::class);
    }
}