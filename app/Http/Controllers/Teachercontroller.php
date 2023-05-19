<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class Teachercontroller extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();

        return view('crud.index', compact('teachers'));
    }
}
