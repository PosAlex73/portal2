<?php

namespace Database\Seeders;

use App\Courses\Other\DockerBasic;
use App\Courses\Php\ArraysCourse;
use App\Courses\Php\BasePhpCourse;
use App\Courses\Php\TypesCourse;
use App\Enums\CommonStatuses;
use App\Enums\Courses\CourseCategories;
use App\Models\Category;
use App\Models\PracticeCourse;
use App\Models\PracticeTask;
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
        $pcourse_categories = CourseCategories::getAll();

        $categories = collect();
        foreach ($pcourse_categories as $category) {
            $categories[] = Category::create([
                'title' => $category,
                'status' => CommonStatuses::ACTIVE
            ]);
        }

        PracticeCourse::factory()->create([
            'id' => 1,
            'title' => __('vars.php_base'),
            'description' => $f->text(500),
            'short_description' => $f->text(150),
            'category_id' => $categories->random()->id,
            'class' => BasePhpCourse::class,
        ]);

        PracticeCourse::factory()->create([
            'id' => 2,
            'title' => __('vars.php_types'),
            'description' => $f->text(500),
            'short_description' => $f->text(150),
            'category_id' => $categories->random()->id,
            'class' => TypesCourse::class
        ]);

        //FIXME add course loader config
        PracticeCourse::factory()->create([
            'id' => 3,
            'title' => __('vars.base_arrays'),
            'description' => $f->text(500),
            'short_description' => $f->text(150),
            'category_id' => $categories->random()->id,
            'class' => ArraysCourse::class
        ]);

        foreach (ArraysCourse::assignTasks() as $array_index => $task) {
            $task = $task();

            PracticeTask::create([
                'title' => $f->text(10),
                'description' => $f->text(200),
                'status' => CommonStatuses::ACTIVE,
                'points' => $task->points,
                'practice_course_id' => 3,
                'array_index' => $array_index,
                'type' => $task->type,
                'data' => ''
            ]);
        }

        PracticeCourse::factory()->create([
            'id' => 4,
            'title' => __('vars.' . DockerBasic::$course_id),
            'description' => $f->text(500),
            'short_description' => $f->text(150),
            'category_id' => $categories->random()->id,
            'class' => DockerBasic::class
        ]);

        foreach (DockerBasic::assignTasks() as $array_index => $task) {
            $task = $task();
            PracticeTask::create([
                'title' => $f->text(10),
                'description' => $f->text(200),
                'status' => CommonStatuses::ACTIVE,
                'points' => $task->points,
                'practice_course_id' => 4,
                'array_index' => $array_index,
                'type' => $task->type,
                'data' => ''
            ]);
        }
    }
}
