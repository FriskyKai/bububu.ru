<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::where('code', 'admin')->first();
        $role_manager = Role::where('code', 'manager')->first();
        $role_user = Role::where('code', 'user')->first();

        User::create([
            'surname' => 'Уляхин',
            'name' => 'Василий',
            'patronymic' => 'Алексеевич',
            'sex' => 1,
            'birthday' => '1987-12-11',
            'email' => 'cristaldevil@mail.ru',
            'password' => 'cristaldevil',
            'nickname' => 'Alomon',
            'avatar' => null,
            'phone' => '+7(913)114-10-17',
            'api_token' => '1',
            //'login' => 'cristaldevil',
            'role_id' => $role_admin->id,
        ]);
        User::create([
            'surname' => 'Евсеев',
            'name' => 'Дмитрий',
            'patronymic' => 'Витальевич',
            'sex' => 1,
            'birthday' => '2005-11-04',
            'email' => 'dima112831@gmail.com',
            'password' => 'krofpoi',
            'nickname' => 'Krofty',
            'avatar' => null,
            'phone' => '+7(952)164-19-03',
            'api_token' => '2',
            //'login' => 'krofpoi',
            'role_id' => $role_manager->id,
        ]);
        User::create([
            'surname' => 'Мотов',
            'name' => 'Алибала',
            'patronymic' => 'Эльманович',
            'sex' => 1,
            'birthday' => '2005-01-27',
            'email' => 'unilajar@gmail.com',
            'password' => 'noway',
            'nickname' => 'Noway',
            'avatar' => null,
            'phone' => '+7(952)899-75-95',
            'api_token' => '3',
            //'login' => 'noway',
            'role_id' => $role_user->id,
        ]);
    }
}

