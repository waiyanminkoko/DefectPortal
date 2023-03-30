<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Defect;

class DefectFormUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function submit_form_user()
    {
        //
        //return Defect::all;
        return view('pages.submit_form_user');
    }

    public function index()
    {
        //
        return view('pages.defect_form_user_laravel');
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
        //
        //rules
        $this->validate($request, [
            'accomodation' => 'required',
            'hall_location' => 'required',
            'floor' => 'required',
            'cluster' => 'required',
            'fault' => 'required',
            'room' => 'required',
            'description' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        //Create Defect Report
        $defect = new Defect ;
        $defect->accomodation = $request->input('accomodation');
        $defect->hall_location = $request->input('hall_location');
        $defect->floor = $request->input('floor');
        $defect->cluster = $request->input('cluster');
        $defect->fault = $request->input('fault');
        $defect->room = $request->input('room');
        $defect->description = $request->input('description');
        $defect->remarks = $request->input('remarks');
        $defect->name = $request->input('name');
        $defect->phone = $request->input('phone');
        $defect->email = $request->input('email');
        $defect->save();

        return view('pages.submit_form_user');
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
