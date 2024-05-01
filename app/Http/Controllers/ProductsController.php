<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductsController extends Controller
{
    public function Index()
    {
        $products = Products::get();
        return view('forms.AllProducts', ['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('forms.AddProduct');

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
            'Price' => 'required|integer',
            'Quantity' => 'required|integer',
            'brand_id' => 'required|String',
            'unit_id' => 'required|integer',
            'vendor_id' => 'required|String'

            
            // 'Description' => 'required|String'
        ]);

        $CreateNew = Products::Create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function Edit(Products $Product)
     {
         return view('forms.EditProduct', ['product' =>$Product]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function Update(Request $request, Products $Product)
    {
        //
        $data = $request -> validate([
            'Name' => 'required|String',
            'Price' => 'required|integer',
            'Quantity' => 'required|integer',
            'brand_id' => 'required|String',
            'unit_id' => 'required|integer',
            'vendor_id' => 'required|String'
        ]);     

        $Product -> update($data);
        
        return redirect() -> route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Delete(Products $Product)
    {
        //

        $Product -> delete();
        return redirect() -> route('product.index');
    }
}
