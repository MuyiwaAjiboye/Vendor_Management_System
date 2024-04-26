<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Units;
class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
       $units = Units::get();
        return view('forms.AllUnits', ['units' => $units]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('forms.AddUnit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Store(Request $request)
    {
        $data = $request ->validate([
            'Name' => 'required|String',
            'status'=> 'nullable',
            'Description' => 'required|String'
        ]);

        $CreateNew = Units::Create($data);
        return redirect()->route('unit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Edit(Units $units)
    {
        return view('forms.EditUnit', ['unit' =>$units]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Update(Request $request, Units $units)
    {
        //
        $data = $request -> validate([
            'Name' => 'required|String',
            'status'=> 'nullable',
            'Description' => 'required|String'
        ]);     

        $units -> update($data);
        
        return redirect() -> route('unit.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Delete(Units $units)
    {
        //

        $units -> delete();
        return redirect() -> route('unit.index');
    }
}
