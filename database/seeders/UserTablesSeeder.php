<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\User;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'
        ])
    }
}
