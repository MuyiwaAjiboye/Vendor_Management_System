<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendors;
class VendorController extends Controller
{
    public function Index()
    {
        $vendors = Vendors::get();
        return view('forms.AllAddresses', ['vendors' => $vendors]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('forms.AddVendor');

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
            'CompanyName' => 'required|String',
            'Email' =>'required|String',
            'Number' => 'required|integer',
            'password' => 'required|password',
            'product_id' => 'required|String',
            'address_id' => 'required|String'



        ]);

        $CreateNew = Vendor::Create($data);
        return redirect()->route('vendor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function Edit(Vendors $vendor)
     {
         return view('forms.EditVendor', ['vendor' =>$vendor]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function Update(Request $request, Vendors $vendors)
    {
        //
        $data = $request -> validate([
            'CompanyName' => 'required|String',
            'Email' =>'required|String',
            'Number' => 'required|integer',
            'password' => 'required|password',
            'product_id' => 'required|String',
            'Address_id' => 'required|String'
        ]);     

        $vendors -> update($data);
        
        return redirect() -> route('vendor.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Delete(Vendors $vendors)
    {
        //

        $vendors -> delete();
        return redirect() -> route('vendor.index');
    }
}
