<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
                'name' => "Sadhan Sarker",
                'email' => "sadhansarker3@gmail.com",
                'email_verified_at' => "2019-02-21 09:18:30",
                'password' => Hash::make('1234'),
            ]
        );

        // $this->call(UsersTableSeeder::class);
    }
}
