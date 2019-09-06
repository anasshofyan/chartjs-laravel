<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tutors;

class TutorController extends Controller
{

    public function index()
    {
        $tutor = Tutors::all();
        $params = [
            'title' => 'Data Base Tutor',
            'tutor' => $tutor
        ];

        return view('admin.tutor', $params);
    }

}
