<?php

namespace App\Http\Controllers;

use App\Course;
use App\MyCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CobaController extends Controller
{
    public function create(Request $request)
    {


        $course = [
            'id' => 4,
            "name" => "kursus oke",
            "thumbnail" => "www.image.com",
            "price" => 400000,
            "level" => 'beginner'
        ];
        $userId = $request->input('user_id');
        $user = getUser($userId);
        // $courseId = $request->input('course_id');
        // $course = Course::find($courseId);
        // $user = [
        //     "id" => 4,
        //     "name" => "ulza",
        //     "email" => "ulza@gmail.com"
        // ];

        $order = postOrder([
            'user' => $user['data'],
            'course' => $course
        ]);
        return response()->json($order);

        // $courseId = $request->input('course_id');
        // $userId = $request->input('user_id');
        // $course = Course::find($courseId);
        // $user = getUser($userId);


        // if ($course->type === 'premium') {
        //     $order = postOrder([
        //         'user' => $user['data'],
        //         'course' => $course->toArray()
        //     ]);
        //     return response()->json($order);
        // }

    }
}
