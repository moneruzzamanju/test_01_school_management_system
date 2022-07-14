<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use App\Models\Student;
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
        $data['students'] = Student::all();
        return view('backend.modules.student.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['guardians'] = Guardian::all();
        return view('backend.modules.student.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['date_of_birth'] = $request->date_of_birth;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;
        $data['street_name'] = $request->street_name;
        $data['police_station'] = $request->police_station;
        $data['district'] = $request->district;
        $data['admission_date'] = $request->admission_date;

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'public/images';
            $file_name =rand(000,999).'.'. $file->getClientOriginalExtension();
            $file->move($path,$file_name);
            $data['photo'] = $path.'/'.$file_name;
        }
        $data['guardian_id'] = $request->guardian_id;

        // dd($data);
        Student::create($data);
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('backend.modules.student.show',['student'=>$student]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $data['guardians'] = Guardian::all();

        $data['student']=Student::find($student->id);
        return view('backend.modules.student.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['date_of_birth'] = $request->date_of_birth;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;
        $data['street_name'] = $request->street_name;
        $data['police_station'] = $request->police_station;
        $data['district'] = $request->district;
        $data['admission_date'] = $request->admission_date;

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'public/images';
            $file_name =rand(000,999).'.'. $file->getClientOriginalExtension();
            $file->move($path,$file_name);
            $data['photo'] = $path.'/'.$file_name;
            if(file_exists($student->photo)){
                unlink($student->photo);
            }
        }
        $data['guardian_id'] = $request->guardian_id;

        // dd($data);
        $student->update($data);
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }
}
