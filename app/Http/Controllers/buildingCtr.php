<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buildingMod;

class buildingCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = buildingMod::all();
        return view('index',compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buildingView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['buildingDesc'=>'required'
    ]);
        $buildings = new buildingMod([
            'buildingDesc'=>$request->get('buildingDesc'),
            'active'=>$request->get('active'),
            'remark'=>$request->get('remark')
        ]);
        $buildings->save();
        return redirect('/buildingCN')->with('success','Data Inserted Successfully');
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
        $buildings = buildingMod::find($id);
        return view('buildingEditView',compact('buildings'));
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
        $request->validate(['buildingDesc'=>'required'
    ]);
        $buildings = buildingMod::find($id);
        $buildings -> buildingDesc = $request ->get('buildingDesc');
        $buildings -> active = $request ->get('active');
        $buildings -> remark = $request ->get('remark');

        $buildings -> save();

        return redirect('/buildingCN') -> with('success','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buildings = buildingMod::find($id);
        $buildings -> delete();
        return redirect('/buildingCN') -> with('delete','Successfully Deleted');
    }
}
