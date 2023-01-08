<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->create( [
                                                 'name'     => 'Test User',
                                                 'email'    => 'test@email.com',
                                                 'password' => Hash::make( '123mudar' ),
                                             ] );
    }
}
