<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Validator;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
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
                        'email' => 'required|unique:registrations|max:100',
                        'phone_number' => 'required|max:30',
                        'experience_years' => 'required|min:0',
                        'current_position' => 'required|max:30',
                        'josa_member' => 'required',
                        'programming_exp' => 'required'
                    ]);

        if ($validator->fails()) {
            return redirect('registration')
                    ->withErrors($validator)
                    ->withInput();
        }

        $newApplication = new Registration;
        $newApplication->name = $request->name;
        $newApplication->email = $request->email;
        $newApplication->phone_number = $request->phone_number;
        $newApplication->experience_years = $request->experience_years;
        $newApplication->current_position = $request->current_position;
        $newApplication->gender = $request->gender;
        $newApplication->exp_handling_data_related_problems = $request->exp_handling_data_related_problems;
        $newApplication->apply_for_data_scientist = $request->apply_for_data_scientist;
        $newApplication->registration_fees = $request->registration_fees;
        $newApplication->josa_member = $request->josa_member;
        $newApplication->programming_exp = $request->programming_exp;
        $newApplication->used_os = $request->used_os;

        for ($i=0; $i < sizeof($request->time_availability); $i++) {
            if($i == 0) {
                $newApplication->time_availability = $request->time_availability;
            }
            else {
                $newApplication->time_availability = $newApplication->time_availability . '///' . $request->time_availability[$i];
            }
        }
        $newApplication->save();

        return view("registrationConfirmation");

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
