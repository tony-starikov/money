<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'phone' => '000000000',
                'password' => bcrypt('admin'),
                'is_admin' => 1,
                'last_visit' => time(),
                'check' => 500,
                'confirm_status' => 1,
            ],
            [
                'name' => 'user',
                'email' => 'user@mail.com',
                'phone' => '000000001',
                'password' => bcrypt('user'),
                'is_admin' => 0,
                'last_visit' => time(),
                'check' => 500,
                'confirm_status' => 1,
            ],
            [
                'name' => 'user1',
                'email' => 'user1@mail.com',
                'phone' => '000000002',
                'password' => bcrypt('user'),
                'is_admin' => 0,
                'last_visit' => time(),
                'check' => 500,
                'confirm_status' => 1,
            ],
            [
                'name' => 'user2',
                'email' => 'user2@mail.com',
                'phone' => '000000003',
                'password' => bcrypt('user'),
                'is_admin' => 0,
                'last_visit' => time(),
                'check' => 500,
                'confirm_status' => 1,
            ],
            [
                'name' => 'user3',
                'email' => 'user3@mail.com',
                'phone' => '000000004',
                'password' => bcrypt('user'),
                'is_admin' => 0,
                'last_visit' => time(),
                'check' => 500,
                'confirm_status' => 1,
            ],
        ]);
    }
}
