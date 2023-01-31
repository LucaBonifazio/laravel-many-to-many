<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Paperino',
                'email' => 'paperino@gmail.com',
                'password' => Hash::make('paperino'),
            ],
            [
                'name' => 'Pippo',
                'email' => 'pippo@gmail.com',
                'password' => Hash::make('pippo'),
            ],
            [
                'name' => 'Topolino',
                'email' => 'topolino@gmail.com',
                'password' => Hash::make('topolino'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        };
    }
}
