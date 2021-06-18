<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@softui.com',
            'password' => Hash::make('secret')
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
