<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Administrator',
               'username'=>'Admin',
               'email'=>'admin@lelang.com',
                'is_role'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'username'=>'User',
               'email'=>'user@lelang.com',
               'is_role'=>'2',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
