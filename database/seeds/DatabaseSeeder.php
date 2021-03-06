<?php

use Illuminate\Database\Seeder;

use App\Todo;

use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TodosTableSeeder::class);

        $this->call(UsersTableSeeder::class);
    }
}
