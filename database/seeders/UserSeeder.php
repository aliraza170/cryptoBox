<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('TRUNCATE_ON_SEED')) {
            Schema::disableForeignKeyConstraints();
            User::truncate();
            Schema::enableForeignKeyConstraints();

            DB::statement("ALTER TABLE users AUTO_INCREMENT = 21402;");
        }

        $users = [
            [
                'name' => 'Test Admin',
                'email' => config('app.admin.email'),
                'email_verified_at' => now(),
                'password' => Hash::make("123456789"),
                'phone' => config('app.admin.phone'),
                'phone_verified_at' => now(),
                'role' => 'admin',
            ],
        ];

        foreach ($users as $user) {
            $user_role = $user['role'] ?? 'standard user';
            unset($user['role']);

            $new_user = User::create($user);
            $new_user->assignRole($user_role);

            if($user_role == 'standard user'){
                $new_user->generate_wallets();
            }
        }
    }
}
