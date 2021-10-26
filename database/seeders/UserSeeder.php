<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $user = new User;
        $user->name     = 'User';
        $user->email    = 'user@email.com';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
