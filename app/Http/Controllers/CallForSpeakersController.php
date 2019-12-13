<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\CallForSpeaker;
use Session;

class CallForSpeakersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("callForSpeakers");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                        'name' => 'required|max:255',
                        'email' => 'required|unique:call_for_speakers|max:100',
                        'phone_number' => 'required|max:30',
                        'experience_years' => 'required|min:0',
                        'current_position' => 'required|max:30',
                        'last_data_science_bootcamp_trainer' => 'required',
                        'josa_member' => 'required'
                    ]);

        if ($validator->fails()) {
            return redirect('call-for-speakers')
                    ->withErrors($validator)
                    ->withInput();
        }

        $callForSpeaker = new CallForSpeaker;
        $callForSpeaker->name = $request->name;
        $callForSpeaker->email = $request->email;
        $callForSpeaker->preferred_topics = $request->preferred_topics;
        $callForSpeaker->phone_number = $request->phone_number;
        $callForSpeaker->experience_years = $request->experience_years;
        $callForSpeaker->current_position = $request->current_position;
        $callForSpeaker->last_data_science_bootcamp_trainer = $request->last_data_science_bootcamp_trainer;
        $callForSpeaker->josa_member = $request->josa_member;
        $callForSpeaker->save();


        Session::flash('message', 'Done');
        return redirect()->back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
