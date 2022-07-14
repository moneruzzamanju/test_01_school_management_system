<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['guardians'] = Guardian::all();
        return view('backend.modules.guardian.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.guardian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['father_name'] = $request->father_name;
        $data['father_phone_no'] = $request->father_phone_no;
        $data['father_occupation'] = $request->father_occupation;
   
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'public/images';
            $file_name =rand(000,999).'.'. $file->getClientOriginalExtension();
            $file->move($path,$file_name);
            $data['father_photo'] = $path.'/'.$file_name;
        }

        $data['mother_name'] = $request->mother_name;
        $data['mother_phone_no'] = $request->mother_phone_no;
        $data['mother_occupation'] = $request->mother_occupation;
        $data['office_phone'] = $request->office_phone;
        $data['email'] = $request->email;

        // dd($data);
        Guardian::create($data);
        return redirect()->route('guardian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardian $guardian)
    {
        return view('backend.modules.guardian.show',['guardian'=>$guardian]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardian $guardian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guardian $guardian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardian $guardian)
    {
        $guardian->delete();
        return redirect()->route('guardian.index');
    }
}
