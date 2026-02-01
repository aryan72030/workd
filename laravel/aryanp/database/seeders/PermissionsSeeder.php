<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'manage_blog', 'display_name' => 'Manage Blog', 'description' => 'Can manage blogs']);
        Permission::create(['name' => 'create_blog', 'display_name' => 'Create Blog', 'description' => 'Can create blogs']);
        Permission::create(['name' => 'edit_blog', 'display_name' => 'Edit Blog', 'description' => 'Can edit blogs']);
        Permission::create(['name' => 'delete_blog', 'display_name' => 'Delete Blog', 'description' => 'Can delete blogs']);
        Permission::create(['name' => 'view_blog', 'display_name' => 'View Blog', 'description' => 'Can view blogs']);
    }
}
