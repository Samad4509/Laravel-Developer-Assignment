<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions=[
            "user-list",
            "user-create",
            "user-edit",
            "user-delete",
            "role-list",
            "role-create",
            "role-edit",
            "role-delete",
            "product-list",
            "product-create",
            "product-edit",
            "product-delete",
            "task-list",
            "task-create",
            "task-edit",
            "task-delete",
        ];
        foreach($permissions as $key =>$permission)
        {
            Permission::create(['name' => $permission]);
        }
    }
}
