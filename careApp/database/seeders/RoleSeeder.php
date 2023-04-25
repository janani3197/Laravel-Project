<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $caretaker = Role::create(['name' => 'Care taker' ]);
       $patient = Role::create(['name' => 'Patient' ]);

       Permission::create(['name' => 'bookings.create']);
       Permission::create(['name' => 'bookings.care']);

    //    $patient->givePermissionTo(Permission::Newbooking());
       $patient->givePermissionTo('bookings.create');
       $caretaker->givePermissionTo('bookings.care');
    }
}
