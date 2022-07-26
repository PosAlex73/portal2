<?php

namespace Database\Seeders;

use App\Courses\Php\BasePhpCourse;
use App\Courses\Php\TypesCourse;
use App\Enums\Courses\CourseCategories;
use App\Models\Category;
use App\Models\PracticeCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\WithFaker;

class PracticeCourseSeeder extends Seeder
{
    use WithFaker;

    public function __construct()
    {
        $this->faker = $this->makeFaker();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = $this->faker;

        $category = Category::factory()->create();

        PracticeCourse::factory()->create([
            'id' => 1,
            'title' => __('vars.php_base'),
            'description' => $f->text(500),
            'short_description' => $f->text(150),
            'category_id' => $category->id,
            'class' => BasePhpCourse::class
        ]);

        PracticeCourse::factory()->create([
            'id' => 2,
            'title' => __('vars.php_types'),
            'description' => $f->text(500),
            'short_description' => $f->text(150),
            'category_id' => $category->id,
            'class' => TypesCourse::class
        ]);
    }
}
