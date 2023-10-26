<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [
        'umur',
        'bio',
        'alamat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the user associated with the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    // public function user()
    // {
    //     return $this->hasOne(User::class, 'id', 'user_id');
    // }
}
