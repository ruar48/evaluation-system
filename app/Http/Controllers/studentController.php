<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddCategory;
use App\Models\addQuestioner;

class studentController extends Controller
{
    //
    public function ViewStudentDashboard()
    {
        return view('student.dashboard');
    }

    public function StudentEvaluation()
    {
        $categories = AddCategory::with('questioners')->get();

        return view('student.evaluation', compact('categories'));
    }
}