<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
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
                'nama'=>'Admin',
                'username'=>'Admin',
                'email'=>'admin@pdam.com',
                'level'=>'admin',
                'divisi'=>'Admin',
                'alamat'=>'Jl Xyz',
                'tlp'=>'08767676',
                'password'=> bcrypt('123456'),
            ],
            [
                'nama'=>'User',
                'username'=>'Usser',
                'email'=>'user@pdam.com',
                'level'=>'user',
                'divisi'=>'User',
                'alamat'=>'Jl xyz',
                'tlp'=>'0867564',
                'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
