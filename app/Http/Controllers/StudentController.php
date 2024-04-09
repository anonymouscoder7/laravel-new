<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function index()
    {
        //
    }


    public function create()
    {
        return view('create-student');
    }


    public function store(Request $request)
    {
        // store garne function 

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->description = $request->desc;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagename = time() . $file->getClientOriginalName();
            $file->move('student', $imagename);
            $student->image = 'student/' . $imagename;
        }
        $student->save();
        return back();
        // return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit-student',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $student = Student::find($request->student_id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->description = $request->desc;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagename = time() . $file->getClientOriginalName();
            $file->move('student', $imagename);
            $student->image = 'student/' . $imagename;
        }
        $student->update();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $stu = Student::find($id);
        $stu->delete();
        return back();
    }
}
