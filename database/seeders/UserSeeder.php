<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(User $user, Profile $profile): void
    {
        //
        $profile->bio       = 'Admin';
        $profile->alamat    = 'Admin Aja deh';
        $profile->umur      = 10;
        $profile->save();
        // save data user
        $user->profile_id   = $profile->id;
        $user->role_id      = 1;
        $user->name         = 'Administrator';
        $user->email        = 'admin@admin.com';
        $user->password     = Hash::make('12345678');
        $user->save();
    }
}
