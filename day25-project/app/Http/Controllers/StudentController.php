<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $name;
    protected $city;
    protected $students;


    public function index()
    {
//        $this->name = 'BITM';
//        $this->city = 'Dhaka';
//        $data = 'bitm';
//        $shehon = 'dhaka';
//        return view('all' , ['data' => $this->name]);
//        return view('all')->with(['data' => $this->name,'shehon' => $this->city]);
//        return view('all', compact('data','shehon'));
//        return view('all',[
//            'data' => $this->name,
//            'shehon' => $this->city
//        ]);

//        $this->student  = Student::getAllStudent();
//        return view('all',['students' => $this->student]);
//        $this->student = new Student();
//        $this->student->newStudent();
//        return 'success';

        return view('add-student');

    }
    public function create(Request $request)
    {
        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();

        return redirect()->back()->with('massage', 'student info save successfully');
    }
}
