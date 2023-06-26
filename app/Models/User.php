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
        'username',
        'email',
        'avatar',
        'password',
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

    protected $guarded = [
        'avatar',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function forum(){
        return $this->hasMany(Forum::class);
    }

    public function updateProfile(array $data)
    {
        $this->name = $data['name'];
        $this->username = $data['username'];
        $this->email = $data['email'];
        if (isset($data['avatar'])) {
            $avatar = $data['avatar'];
            // $avatarPath = $avatar->store('public/assets');
            $this->avatar = 'assets/' . $avatar->getClientOriginalName();
        }
    
        $this->save();
    }

    public function isAdmin()
{
    return $this->role === 'admin';
}

    

}
