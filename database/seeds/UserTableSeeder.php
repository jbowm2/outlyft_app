<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Jonathan Bowman';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->roles()->attach([2]);
    }
}
