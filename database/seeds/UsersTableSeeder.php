<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $redactorRole = Role::where('name', 'redactor')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
        	'name' => 'Администратор',
        	'email' => 'admin@discoland.by',
        	'password' => bcrypt('admin')
        ]);

        $redactor = User::create([
        	'name' => 'Редактор',
        	'email' => 'redactor@discoland.by',
        	'password' => bcrypt('redactor')
        ]);

        $user = User::create([
        	'name' => 'Пользователь',
        	'email' => 'user@discoland.by',
        	'password' => bcrypt('user')
        ]);

        $admin->roles()->attach($adminRole);
        $redactor->roles()->attach($redactorRole);
        $user->roles()->attach($userRole);
    }
}
