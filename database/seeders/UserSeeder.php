<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $user =  User::create([
            'name' => 'Chef de projet',
            'email' => 'project.leader@solicode.co',
            'password' => Hash::make('leader'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ])->assignRole('project-leader');
        $leaderPermissions = [
            'index-TasksController',
            'create-TasksController',
            'update-TasksController',
            'store-TasksController',
            'edit-TasksController',
        ];
        $user->givePermissionTo($leaderPermissions);

        User::create([
            'name' => 'membre',
                'email' => 'membre@solicode.co',
                'password' => Hash::make('membre'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ])->assignRole('member');
        
    }
}
