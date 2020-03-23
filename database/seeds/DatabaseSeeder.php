<?php

use App\Model\Course;
use App\Model\Lesson;
use App\Model\Teacher;
use App\Model\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        factory(Teacher::class, 20)->create()
            ->each(static function (Teacher $teacher) {
                factory(Course::class)
                    ->create(['teacher_id' => $teacher->id]);
            });

        Course::all()->each(static function (Course $course) {
            factory(Lesson::class, random_int(5, 10))
                ->create(['course_id' => $course->id]);
        });

        factory(User::class, 40)->create();
    }
}
