<?php

namespace App\Providers;

use App\Alerts\Alert;
use App\Courses\CourseStats;
use App\Courses\Executable;
use App\Enums\Courses\CourseCategories;
use App\Models\Setting;
use App\Rating\CourseRating;
use App\Settings\Set;
use App\Utils\Blog\BlogFilterCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        App::bind(Set::class, function ($app) {
            return new Set(Setting::all());
        });

        App::singleton(Alert::class, function () {
            return new Alert();
        });

        App::bind(CourseStats::class, function ($app, $params) {
            return new CourseStats($params['user_progress']);
        });

        App::bind(CourseRating::class, function ($app, $params) {
            return Executable::class;
        });

        App::singleton(BlogFilterCollection::class, function () {
            $filters = [
                'course_categories' => new Collection(CourseCategories::getAll())
            ];

            $blog_filters = new BlogFilterCollection();

            foreach ($filters as $type => $filter) {
                $blog_filters->setFilter($filter, $type);
            }

            return $blog_filters;
        });
    }
}
