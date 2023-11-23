<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Permission::create([
            'name' => 'index-TasksController',
        ]);
        Permission::create([
            'name' => 'create-TasksController',
        ]);
        Permission::create([
            'name' => 'update-TasksController',
        ]);
        Permission::create([
            'name' => 'store-TasksController',
        ]);
        Permission::create([
            'name' => 'edit-TasksController',
        ]);
        
    }
}
