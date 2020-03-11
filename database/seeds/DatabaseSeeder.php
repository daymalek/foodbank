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
        DB::table('employee')->insert([
            'empName' => Str::random(5),
            'empEmail' => Str::random(5).'@gmail.com',
            'empPass' => Hash::make('123'),
            'empPhone' => "0123456789",
            'role' => "Staff",
        ]);
    }
}
