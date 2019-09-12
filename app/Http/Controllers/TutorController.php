<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
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

    public function print_pdf()
    {
        $tutor = Tutors::all();


        $pdf = PDF::loadview('admin.cetak', ['tutor'=>$tutor]);
        return  $pdf->stream('database.pdf');
    }


}
