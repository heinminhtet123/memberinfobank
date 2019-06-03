<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::all();
        return view('index',compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createBuilding');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //insert into value
    {
          
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
        $buildings = Building::find($id);
        return view('buildingEdit',compact('buildings'));
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
         $request->validate(['buildingDesc'=>'required',
                            'active'=>'required',
                            'remark'=>'required',
                            ]);
        $buildings = Building::find($id); // new variable = model name(must equal in       
                                        //buildingEdit.blade.php($buildings in form))::select 
                                        //from where
        $buildings -> buildingDesc = $request -> get('buildingDesc'); //add data to database
        $buildings -> active = $request -> get('active');
        $buildings -> remark = $request -> get('remark');

        $buildings -> save();

        return redirect('/buildings') ->with('success', 'successfully Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buildings = Building::find($id);
        $buildings -> delete();
        return redirect('/buildings') ->with('success','Successfully deleted');
    }
}
