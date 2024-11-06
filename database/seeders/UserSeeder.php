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
            'surname' => 'Стреколовский',
            'name' => 'Артём',
            'patronymic' => 'Витальевич',
            'sex' => 1,
            'birthday' => '2005-04-12',
            'email' => 'aptem4403@yandex.ru',
            'password' => 'sav123',
            'nickname' => 'Sav',
            'avatar' => null,
            'phone' => '79528940241',
            'api_token' => '1',
            // 'login' => 'sav'
            'role_id' => $role_admin->id,
        ]);

        User::create([
            'surname' => 'Евсеев',
            'name' => 'Дмитрий',
            'patronymic' => 'Витальевич',
            'sex' => 1,
            'birthday' => '2005-11-04',
            'email' => 'dima112831@gmail.ru',
            'password' => 'krofpoi',
            'nickname' => 'Krofty',
            'avatar' => null,
            'phone' => '79521641903',
            'api_token' => '2',
            // 'login' => 'krofpoi'
            'role_id' => $role_manager->id,
        ]);

        User::create([
            'surname' => 'Мотов',
            'name' => 'Алибала',
            'patronymic' => 'Эльманович',
            'sex' => 1,
            'birthday' => '2005-01-27',
            'email' => 'unilajar@gmail.ru',
            'password' => 'noway',
            'nickname' => 'Noway',
            'avatar' => null,
            'phone' => '79528997595',
            'api_token' => '3',
            // 'login' => 'noway'
            'role_id' => $role_user->id,
        ]);
    }
}
