<?php

namespace App\Services;
use App\Models\Course;
use App\Enums\Course\CourseStatus;

class CourseService
{
  
    public function getAll()
    {
       return Course::where('status', CourseStatus::ACTIVE)->paginate(10);
    }

    public function getById(int $id){
        return Course::find($id);
    }

    public function getBySlug(string $slug){
        return Course::where('slug', $slug)->first();
    }
}