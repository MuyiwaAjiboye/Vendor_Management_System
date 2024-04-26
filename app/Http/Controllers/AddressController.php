<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        $addresses = Address::get();
        return view('forms.AllAddresses', ['addresses' => $addresses]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('forms.AddAddress');

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
            'Address' => 'required|String',
            'State' =>'required|String',
            'City' => 'required|String'
        ]);

        $CreateNew = Address::Create($data);
        return redirect()->route('address.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function Edit(Address $address)
     {
         return view('forms.EditAddress', ['address' =>$address]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function Update(Request $request, Address $addresses)
    {
        //
        $data = $request -> validate([
            'Address' => 'required|String',
            'State' =>'required|String',
            'City' => 'required|String'
        ]);     

        $addresses -> update($data);
        
        return redirect() -> route('address.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Delete(Address $addresses)
    {
        //

        $addresses -> delete();
        return redirect() -> route('address.index');
    }
}
