<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logistics;

class LogisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logistics = Logistics::orderBy('item','asc')->paginate(20); //each page has 10 rows of data
        return view('pages.logistics')->with('logistics', $logistics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.logistics_add');
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
        $this->validate($request, [
            'item' => 'required',
            'quantity' => 'required',
            'fault' => 'required',
        ]);

        //Create Defect Report
        $logistic = new Logistics ;
        $logistic->item = $request->input('item');
        $logistic->quantity = $request->input('quantity');
        $logistic->fault = $request->input('fault');
        $logistic->remarks = $request->input('remarks');
        $logistic->save();
        return redirect('/logistics')->with('success','Logistics Added');
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
        $logistic = Logistics::find($id);
        return view('pages.logistics_indv')->with('logistic', $logistic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Logistics $logistic)
    {
        //
        return view('pages.logistics_edit', ['logistic' => $logistic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logistics $id)
    {
        //
        /*$this->validate($request, [
            'item' => 'required',
            'quantity' => 'required',
            'fault' => 'required',
        ]);*/

        $formFields = $request->validate([
            'item' => 'required',
            'quantity' => 'required',
            'fault' => 'required',
        ]);

        //Update Defect Report
        $logistic = Logistics::find($id);
        $logistic->item = $request->input('item');
        $logistic->quantity = $request->input('quantity');
        $logistic->fault = $request->input('fault');
        $logistic->remarks = $request->input('remarks');
        $logistic->save();
        #$logistic->update($formFields);
        /*$logistic->update([
            'item' => $logistic->item,
            'quantity' => $logistic->quantity,
            'fault' => $logistic->fault,
            'remarks' => $logistic->remarks
        ]);*/
        return redirect('/logistics/{{$logistic->id}}')->with('success','Logistics Updated');
    }

    /**
     * Remove the specified resource from storage.h
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logistics $logistic)
    {
        //
        $logistic->delete();
        return redirect('/logistics')->with('success', 'Logisitic List Updated');
    }
}
