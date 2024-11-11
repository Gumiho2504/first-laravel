<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // Check and delete existing user before creating
        DB::table('users')->where('email', 'test@example.com')->delete();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('qwe123.')
        ]);

        Note::factory(100)->create();
        //Note::factory(10)->create();
    }
}
