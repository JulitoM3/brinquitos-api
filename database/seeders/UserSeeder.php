<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rafael Ramos',
            'email' => 'admin@brinquitos.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
