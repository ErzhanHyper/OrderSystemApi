<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('users')->insert(array(
            array(
                'id' => 1,
                'name' => 'Администратор',
                'password' => '088d706a334a36a9c761ec482d5854f5',
                'email' => 'erzhan.hype@gmail.com',
                'username' => '960213350271',
            ),
        ));

    }
}
