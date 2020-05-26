<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert ([ 
            ['name'=>'User',
             'surname'=>'User',
             'email'=>'useruser@tweb.com',
             'username'=>'useruser',
             'password'=>Hash::make('pQoQBc8A'),
             'role'=>'user',
             'homeTown'=>'Pavia',
             'birthday'=>'1993-02-19',
             'job'=>'User',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['name'=>'Staff',
             'surname'=>'Staff',
             'email'=>'staffstaff@tweb.com',
             'username'=>'staffstaff',
             'password'=>Hash::make('pQoQBc8A'),
             'role'=>'staff',
             'homeTown'=>'Bologna',
             'birthday'=>'1984-04-21',
             'job'=>'Staff',
            'created_at' => date("Y-m-d H:i:s"),
             'updated_at' => date("Y-m-d H:i:s")],
            ['name'=>'Admin',
             'surname'=>'Admin',
             'email'=>'adminadmin@tweb.com',
             'username'=>'adminadmin',
             'password'=>Hash::make('pQoQBc8A'),
             'role'=>'admin',
             'homeTown'=>'Lugano',
             'birthday'=>'1989-10-23',
             'job'=>'Admin',
             'created_at' => date("Y-m-d H:i:s"),
             'updated_at' => date("Y-m-d H:i:s")]
        ]);
    }
}
