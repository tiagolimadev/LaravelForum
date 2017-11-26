<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(
            [
                'name' => 'Tiago Lima',
                'email' => 'tiagolimadev@outlook.com',
                'password' => bcrypt('secret123'),
            ]
        );
    }
}
