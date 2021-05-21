<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use App\Http\Requests\StudentForm;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('name', 'asc')->paginate();
        
        return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all('id', 'name');

        return view('admin.student.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentForm $request)
    {
        $validatedData = $request->validated();

        $student = Student::create($validatedData);

        flash('Student added successfully', 'success');

        return redirect()->route('admin.student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $teachers = Teacher::all('id', 'name');

        return view('admin.student.edit', compact('student', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentForm $request, Student $student)
    {
        $validatedData = $request->validated();

        $student->fill($validatedData)->save();

        flash('Student updated successfully', 'success');

        return redirect()->route('admin.student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
         $student->delete();

         flash('Student deleted successfully.', 'success');

        return redirect()->route('admin.student.index');
    }
}
