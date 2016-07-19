<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'admin@admin.loc';
        $user->password = bcrypt('admin123');
        $user->is_admin = true;
        $user->save();

        $user = new \App\User();
        $user->name = 'John';
        $user->email = 'silver@piratebay.com';
        $user->password = bcrypt('1234');
        $user->save();

        $user = new \App\User();
        $user->name = 'Billy';
        $user->email = 'bones@piratebay.com';
        $user->password = bcrypt('1234');
        $user->save();
    }
}
