<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = 'Summer';
        $user->email = 'summer@exmple.com';
        $user->is_admin = true;
        $user->password = bcrypt('summer');
        $user->save();
    }
}
