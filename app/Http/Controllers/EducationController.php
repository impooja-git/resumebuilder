<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = auth()->user()->education;
        return view('education.index', compact('education'));
        // dd($education);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',


        ]);
        auth()->user()->education()->create($request->all());

        // $detail = new Education();

        // $detail->school_name = $request->input('school_name');
        // $detail->school_location = $request->input('school_location');
        // $detail->degree = $request->input('degree');
        // $detail->field_of_study = $request->input('field_of_study');
        // $detail->graduation_start_date = $request->input('graduation_start_date');
        // $detail->graduation_end_date = $request->input('graduation_end_date');

        // $detail->user_id = auth()->id();
        // $detail->save();

        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {

        return view('education.edit', compact('education'));
    }


    public function update(Request $request, Education $education)
    {
        $request->validate([
            'school_name' => 'required',
            'school_location' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',


        ]);
        $education()->update($request->all());
        return redirect()->route('education.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return back();
    }
}
