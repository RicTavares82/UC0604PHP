<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'editor']);
        Role::create(['name' => 'user']);
        $user=User::create([
            'name' => 'Admin',
            'email' =>'admin@teste.pt',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('admin');

        User::create([
            'name' => 'Editor',
            'email' =>'editor@teste.pt',
            'password' => Hash::make('password'),
        ])->assignRole('editor');



        $user=User::create([
            'name' => 'User',
            'email' =>'user@teste.pt',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('user');

    }
}
