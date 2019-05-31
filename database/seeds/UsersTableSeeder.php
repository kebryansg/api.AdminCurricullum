<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
                [
                    'Name' => 'Admin',
                    'Email' => 'admin@admin.dev',
                    'Password' => Hash::make('admin'),
                    'Estado' => 'ACT',
                    'IDRol' => '1',
                ],
                [
                    'Name' => 'KBSUAREZ',
                    'Email' => 'kebryansg@gmail.com',
                    'Password' => Hash::make('12345'),
                    'Estado' => 'ACT',
                    'IDRol' => '2',
                ]
            ]
        );
    }
}
