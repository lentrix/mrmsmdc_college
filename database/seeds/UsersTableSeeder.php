<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Benjie Lenteria',
                'username' => 'lentrix',
                'role' => 'admin',
                'password' => bcrypt('lentrix2019!')
            ],
            [
                'name' => 'Judge 1',
                'username' => 'judge1',
                'role' => 'judge',
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Judge 2',
                'username' => 'judge2',
                'role' => 'judge',
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Judge 3',
                'username' => 'judge3',
                'role' => 'judge',
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Judge 4',
                'username' => 'judge4',
                'role' => 'judge',
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Judge 5',
                'username' => 'judge5',
                'role' => 'judge',
                'password' => bcrypt('password123')
            ],
        ];

        foreach ($users as $user) {
            App\User::create($user);
        }
    }
}
