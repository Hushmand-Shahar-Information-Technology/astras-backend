<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create the super admin role if it doesn't exist
        $role = Role::firstOrCreate(['name' => 'super_admin']);

        // Create the super admin user
        $user = User::firstOrCreate(
            ['email' => 'dev@dev.com'],
            [
                'name' => 'dev',
                'password' => bcrypt('dev'),
            ]
        );

        // Assign the super admin role to the user
        $user->assignRole($role);
    }
}
