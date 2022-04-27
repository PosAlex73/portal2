<?php

namespace Database\Seeders;

use App\Enums\CommonStatuses;
use App\Enums\Users\UserTypes;
use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\Category;
use App\Models\Course;
use App\Models\Order;
use App\Models\Page;
use App\Models\Plan;
use App\Models\Promotion;
use App\Models\Task;
use App\Models\Thread;
use App\Models\ThreadMessage;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserProgress;
use App\Models\UserSetting;
use App\Settings\Settings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CommonSeeder extends Seeder
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
            'permissions' => '{"platform.systems.roles":true,"platform.systems.users":true,"platform.systems.attachment":true,"platform.index":true}'
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

        Category::factory()->count(50)->create();
        User::factory()->count(100)->create();
        Promotion::factory()->count(20)->create();
        Plan::factory()->count(5)->create();

        $users = User::all();

        foreach ($users as $user) {
            Thread::factory()->for($user)->create();
            UserProfile::factory()->for($user)->create();
            UserSetting::factory()->for($user)->create();
        }

        $threads = Thread::all();
        foreach ($threads as $thread) {
            ThreadMessage::factory()->count(1, 15)->for($thread)->create([
                'owner_id' => 1
            ]);
        }

        $categories = Category::all();

        foreach ($categories as $category) {
            Article::factory()->count(mt_rand(1, 3))->for($category)->create();
            Page::factory()->for($category)->create();
            Course::factory()->count(mt_rand(1, 5))->for($category)->create();
        }

        $articles = Article::all();
        foreach ($articles as $article) {
            $user = $users->random();
            ArticleComment::factory()->count(mt_rand(0, 15))->for($article)->create([
                'user_id' => $user->id
            ]);
        }

        $courses = Course::all();
        foreach ($courses as $course) {
            Task::factory()->count(15, 25)->for($course)->create();
        }

        foreach ($users as $user) {
            $course = $courses->random();

            $order = Order::factory()->for($user)->create();
            UserProgress::factory()->for($user)->create([
                'course_id' => $course->id,
                'order_id' => $order->id
            ]);

        }



        $settings = Settings::getSettings();

        foreach ($settings as $tab => $_settings) {
            foreach ($_settings as $setting) {
                $setting['tab'] = $tab;
                unset($setting['variants']);
                DB::table('settings')->insert($setting);
            }
        }
    }
}
