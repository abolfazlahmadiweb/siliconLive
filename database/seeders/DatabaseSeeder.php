<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Plan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        # pelan
        Plan::create([
            'name' => 'ordinary',
            'persian_name' => 'معمولی'
        ]);
        Plan::create([
            'name' => 'urgancy',
            'persian_name' => 'فوری'
        ]);
        Plan::create([
            'name' => 'immediately',
            'persian_name' => 'آنی'
        ]);

        # role
        Role::create([
            'name' => 'user',
            'description' => 'this is simle default role'
        ]);

        Role::create([
            'name' => 'supervisor',
            'description' => 'this is supervisor role'
        ]);

        Role::create([
            'name' => 'ceo',
            'description' => 'this is ceo role'
        ]);

        #  user
        $user1 = User::create([
           'name' => 'ابوالفضل احمدی',
           'email' => 'info.education58@gmail.com',
           'phone' => '09120968404',
           'password' => Hash::make(123456789)
        ]);

        $user2 = User::create([
            'name' => 'مریم جعفری',
            'email' => 'm@gmail.com',
            'phone' => '09121234567',
            'password' => Hash::make(123456789)
        ]);

        $user3 = User::create([
            'name' => 'محمد تستی',
            'email' => 'mm@gmail.com',
            'phone' => '09127654321',
            'password' => Hash::make(123456789)
        ]);

        $user1->roles()->sync([3]);

        $user2->roles()->sync([1]);

        $user3->roles()->sync([2]);
    }
}
