<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'SUPERADMIN',
                'description' => 'Acceso total a la app',
            ],
            [
                'id'    => 2,
                'title' => 'User',
            ],
        ];

        Role::insert($roles);
    }
}
