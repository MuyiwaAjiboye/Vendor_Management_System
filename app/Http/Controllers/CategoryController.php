<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        $categories = Category::get();
        return view('forms.AllCategories', ['categories' => $categories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('forms.AddCategory');

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

        $CreateNew = category::Create($data);
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function Edit(Category $category)
     {
         return view('forms.EditCategory', ['category' =>$category]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function Update(Request $request, Category $categories)
    {
        //
        $data = $request -> validate([
            'Name' => 'required|String',
            'Description' => 'required|String'
        ]);     

        $categories -> update($data);
        
        return redirect() -> route('category.index')->with('success', 'Category updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Delete(Category $categories)
    {
        //

        $categories -> delete();
        return redirect() -> route('category.index')->with('success', 'Category Deleted successfully');  

    }
}
