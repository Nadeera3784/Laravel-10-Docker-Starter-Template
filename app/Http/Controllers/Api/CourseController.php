<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CourseService;
use App\Services\VideoProgressService;
use Exception;
use Illuminate\Http\Request;

class CourseController extends Controller
{

  private $courseService;
  private $videoProgressService;

  public function __construct(CourseService $courseService, VideoProgressService $videoProgressService)
  {
    $this->courseService = $courseService;
    $this->videoProgressService = $videoProgressService;
  }

  public function index()
  {
    try {
      $data = $this->courseService->getAll();
      return response()->json($data, 200);
    } catch (Exception $th) {
      return response()->json('Something went wrong, please try again later', 400);
    }
  }

  public function show($slug)
  {
    try {
      $data = $this->courseService->getBySlug($slug);
      return response()->json($data, 200);
    } catch (Exception $th) {
      return response()->json('Something went wrong, please try again later', 400);
    }
  }

  public function updatetProgress(Request $request){
    try {
      $request->validate([
        'course_id' => 'required|exists:courses,id',
        'user_id' => 'required|exists:users,id',
        'completion_rate' => 'required|numeric|min:0|max:100',
      ]);
      $this->videoProgressService->update($request);
      return response()->json(null, 200);
    } catch (Exception $exception) {
      return response()->json($exception->getMessage(), 400);
    }
  }

}
