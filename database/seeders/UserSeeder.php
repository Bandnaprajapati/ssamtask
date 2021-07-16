<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users[0] = array('name' => 'admin', 'email' => 'admin@gmail.com', 'password' => '12345678' , 'role' => '1');
        $users[1] = array('name' => 'admin', 'email' => 'user@gmail.com', 'password' => '12345678' , 'role' => '0');
           foreach($users as $user) {
            User::create($user);
        }
    }
}
