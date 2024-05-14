<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\brand;
use App\Models\Units;
use App\Models\Category;


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
        
        $brands = brand::get();
        $categories = Category::get();
        $units = Units::get();
        
        
        return view('forms.AddProduct' , ['brands' => $brands, 'categories' => $categories, 'units' => $units]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Store(Request $request)
    {
        // dd($request);
        $data = $request ->validate([
            'Name' => 'required|String',
            'Price' => 'required|integer',
            'Quantity' => 'required|integer',
            'category_id'=>'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'unit_id' => 'required|exists:units,id'  
            
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
    
     public function Edit($id)
     {
        $Product = Products::find($id);

        $brands = brand::get();
        $categories = Category::get();
        $units = Units::get();
        
         return view('forms.EditProduct', ['Product' =>$Product,'categories' => $categories, 'brands' => $brands, 'units' => $units ]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function Update(Request $request, Products $products)
    {
        // dd($request);
        $data = $request -> validate([
            'Name' => 'required|String',
            'Price' => 'required|integer',
            'Quantity' => 'required|integer',
            'category_id'=>'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'unit_id' => 'required|exists:units,id'  
           
        ]);  
        
        // $updateProduct = $products::where('id', $request->id)->update([
        //     'Name' => $request ->
        // ])




        // dd($data);
        $products -> update($data);
        
        return redirect() -> route('product.index')->with('success', 'Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Delete(Products $products)
    {
        //

        $products -> delete();
        
        return redirect() -> route('product.index')->with('success', 'Product Deleted successfully');
    }

    public function details(Products $product){
        $brands = brand::get();
        $categories = Category::get();
        $units = Units::get();
     
        return view('forms.ProductDetails', ['brands' => $brands, 'categories' => $categories, 'units' => $units, 'product' => $product]);
     
     }


}
