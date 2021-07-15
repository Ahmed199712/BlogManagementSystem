<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->first_name = 'laravel';
        $admin->last_name = 'developer';
        $admin->phone = '01012547854';
        $admin->address = 'Cairo , Egypt';
        $admin->email = 'laraveldeveloper@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->save();
    }
}
