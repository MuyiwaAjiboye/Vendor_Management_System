<?php

namespace App\Http\Controllers;
use App\Models\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        $brands = brand::get();
        return view('forms.AllBrands', ['brands' => $brands]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('forms.AddBrand');

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
            
            'Description' => 'required|String'
        ]);

        $CreateNew = brand::Create($data);
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function Edit(brand $brand)
     {
         return view('forms.EditBrand', ['brand' =>$brand]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function Update(Request $request, brand $brands)
    {
        //
        $data = $request -> validate([
            'Name' => 'required|String',
            'Description' => 'required|String'
        ]);     

        $brands -> update($data);
        
        return redirect() -> route('brand.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Delete(brand $brands)
    {
        //

        $brands -> delete();
        return redirect() -> route('brand.index');
    }
}
