<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['teachers'] = Teacher::all();
        return view('backend.modules.teacher.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['specialty'] = $request->specialty;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'public/images';
            $file_name =rand(000,999).'.'. $file->getClientOriginalExtension();
            $file->move($path,$file_name);
            $data['photo'] = $path.'/'.$file_name;
        }

        // dd($data);
        Teacher::create($data);
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('backend.modules.teacher.show',['teacher'=>$teacher]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $data['teacher']=Teacher::find($teacher->id);
        return view('backend.modules.teacher.edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['specialty'] = $request->specialty;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'public/images';
            $file_name =rand(000,999).'.'. $file->getClientOriginalExtension();
            $file->move($path,$file_name);
            $data['photo'] = $path.'/'.$file_name;

            if(file_exists($teacher->photo)){
                unlink($teacher->photo);
            }

        }

        // dd($data);
        $teacher->update($data);
        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
