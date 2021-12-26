<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "admin";
        $user->username = "admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('admin'); 
        $user->save();
    }
}
