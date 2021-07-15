<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'User One';
        $user->phone = '01012547854';
        $user->address = 'Cairo , Egypt';
        $user->email = 'userone@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();

        $user1 = new User;
        $user1->name = 'User Two';
        $user1->phone = '01012547854';
        $user1->address = 'Cairo , Egypt';
        $user1->email = 'usertwo@gmail.com';
        $user1->password = bcrypt('123456');
        $user1->save();

        $user2 = new User;
        $user2->name = 'User Three';
        $user2->phone = '01012547854';
        $user2->address = 'Cairo , Egypt';
        $user2->email = 'userthree@gmail.com';
        $user2->password = bcrypt('123456');
        $user2->save();
    }
}
