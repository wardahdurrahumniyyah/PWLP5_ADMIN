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
                'name' => 'IsUser',
                'username' => 'IsUser',
                'email' => 'user@mail.com',
                'password' => bcrypt('12345'),
                'photo' => 'user.jpg',
                'roles_id' => 2
            ],
            [
                'name' => 'IsAdmin',
                'username' => 'IsAdmin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('12345'),
                'photo' => 'images.png',
                'roles_id' => 1
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
