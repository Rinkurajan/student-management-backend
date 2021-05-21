<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentMark;
use App\Models\Student;
use App\Http\Requests\StudentMarkForm;

class StudentMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $marks = StudentMark::orderBy('student_id', 'asc')->paginate();
        
        return view('admin.mark.index',compact('marks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all('id', 'name');

        return view('admin.mark.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentMarkForm $request)
    {
        $validatedData = $request->validated();

        $studentMark = StudentMark::create($validatedData);

        flash('Student marks added successfully', 'success');

        return redirect()->route('admin.mark.index');
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
    public function edit(StudentMark $mark)
    {
        $students = Student::all('id', 'name');

        return view('admin.mark.edit', compact('students', 'mark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentMarkForm $request, StudentMark $mark)
    {
        $validatedData = $request->validated();

        $mark->fill($validatedData)->save();

        flash('Student marks updated successfully', 'success');

        return redirect()->route('admin.mark.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentMark $mark)
    {
         $mark->delete();

         flash('Student marks deleted successfully.', 'success');

        return redirect()->route('admin.mark.index');
    }
}
