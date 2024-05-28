<?php

namespace Database\Seeders;

use App\Models\SuperAdmin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = new SuperAdmin();
        $superadmin->name = 'Superadmin Name';
        $superadmin->email = 'superadmin@example.com';
        $superadmin->password = Hash::make('password1');
        $superadmin->save();
    }
}
