<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
# use Illuminate\Http\RedirectResponse;
use App\Models\Defect;
use DB;

class DefectReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        #$defects = Defect::all();
        #$defects = Defect::orderBy('id','asc')->get(); //sort the data in the table in ascending order
        #$defects = Defect::orderBy('id','asc')->take(1)->get(); //get 1 row of data
        #$defect = Defect::where('id','1')->get(); //get the data in the table with id = 1

        //Raw SQL
        #$defects = DB::select('SELECT * FROM defects');

        $defects = Defect::orderBy('id','asc')->paginate(10); //each page has 10 rows of data
        return view('pages.defect_report')->with('defects', $defects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.defect_form_admin_laravel');
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

        return redirect('/defect_report')->with('success','Defect Report Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show the details that correspond to the id
        $defect = Defect::find($id);
        return view('pages.defect_report_indv')->with('defects', $defect);
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

    public function status_update($id, $status){

        #Defect::where('id', $id)->update(['status', $status]);
        DB::update("update defects set status = '$status' where id = '$id'");

        return redirect('/defect_report')->with('success','Defect Report Updated');

    }
}
