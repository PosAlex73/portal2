<?php

namespace Database\Seeders;

use App\Enums\CommonStatuses;
use App\Enums\Users\UserTypes;
use App\Models\User;
use App\Settings\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.ru',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'type' => UserTypes::ADMIN,
            'status' => CommonStatuses::ACTIVE,
        ]);

        $user = User::create([
            'first_name' => 'user',
            'last_name' => 'user',
            'email' => 'user@user.ru',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'type' => UserTypes::SIMPLE,
            'status' => CommonStatuses::ACTIVE
        ]);

        $settings = Settings::getSettings();

        foreach ($settings as $tab => $_settings) {
            foreach ($_settings as $setting) {
                $setting['tab'] = $tab;
                unset($setting['variants']);
                DB::table('settings')->insert($setting);
            }
        }

        $this->call([
            PracticeCourseSeeder::class,
            PlanSeeder::class
        ]);
    }
}
