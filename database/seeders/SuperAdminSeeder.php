<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Creating Super Admin User
         $superAdmin = User::create([
            'name' => 'Lê Anh Tuấn', 
            'email' => 'leanhtuan1983@gmail.com',
            'password' => Hash::make('tuan1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Lê Thanh Hải', 
            'email' => 'lethanhhai1988@gmail.com',
            'password' => Hash::make('haile1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Nguyễn Minh Nhật', 
            'email' => 'nguyenminhnhat2000@gmail.com',
            'password' => Hash::make('nhat1234')
        ]);
        $productManager->assignRole('Manager');
    }
}
