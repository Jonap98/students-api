<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function getStudents() {
        $students = Students::all();

        return response()->json([
            'result' => true,
            'datos' => $students
        ]);
    }
}
