<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Customer',
            'email' => 'customer@test.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $roleUser = Role::create(['name' => 'customer']);
        $permissions = [
            'C-transaction',
            'R-transaction',
            'U-transaction',
            'D-transaction'
        ];
        $roleUser->syncPermissions($permissions);
        $user->assignRole([$roleUser->id]);
    }
}
