<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'title' => 'SUPERADMIN',
                'description' => 'Acceso total a la app',
            ],
            [
                'id' => 2,
                'title' => 'MANAGER',
            ],
            [
                'id' => 3,
                'title' => 'MANAGER',
            ],
            [
                'id' => 4,
                'title' => 'MANAGER',
            ],
            [
                'id' => 5,
                'title' => 'MANAGER',
            ],
            [
                'id' => 6,
                'title' => 'MANAGER',
            ],
        ];

        Role::insert($roles);
    }
}
