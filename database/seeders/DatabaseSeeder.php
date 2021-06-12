<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$user = User::create([
        	'name' 		=> 'Jorge Otalvaro',
        	'document'	=> '12345678',
        	'email'		=> 'client@gmail.com',
        	'password' 	=> bcrypt('12345678')
        ]);

        $user2 = User::create([
        	'name' 		=> 'Jorge Contreras',
        	'document'	=> '123456789',
        	'email'		=> 'admin@gmail.com',
        	'password' 	=> bcrypt('123456789')
        ]);

        $admin = Role::create(['name' => 'admin']);

        $client = Role::create(['name' => 'client']);


        $user->assignRole('client');

        $user2->assignRole('admin');

        \App\Models\User::factory(10)->create();
    }
}
