<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = Student::latest()->paginate(5);

        // return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

        return view('index', [
            'students' => Student::paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create', [
            'student' => (new Student())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'          =>  'required',
            'age'         =>  'nullable',
            'status'         =>  'nullable',

            // 'image'         =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',

        ]);

        // $file_name = time() . '.' . request()->student_image->getClientOriginalExtension();

        // request()->student_image->move(public_path('images'), $file_name);

        // $student =  (new Student())->create($request);
        // session()->flash('success', 'Student'.$student->email.' created updated successfully');
        // return redirect()->route('index');

        $student = new Student;

        $student->name = $request->name;
        $student->age = $request->age;
        $student->status = $request->status;

        $student->save();

        // return redirect()->route('index')->with('success', 'Student Added successfully.');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //


        $request->validate([
            'name'      =>  'required',
            'age'     =>  'required|age',
            'status'     =>  'required|status',

        ]);





        $student->name = $request->name;
        $student->age = $request->age;
        $student->status = $request->status;

        $student->save();


        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student Data deleted successfully');
    }
}
