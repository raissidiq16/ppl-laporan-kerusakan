<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateAdminPasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'admin@gmail.com')->first();
        if ($user) {
            $user->password = Hash::make('admin123'); // Ganti dengan password yang kuat
            $user->save();
        }
    }
}
