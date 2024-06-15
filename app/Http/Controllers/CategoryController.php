<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();

        return view('admin.category.index', ['categories' => $categories]);
    }

    public function create(){

        return view('admin.category.create');
    }

    public function store(Request $request ){
        $filename = "";
   
        
        if($request->hasFile('image')){
            $filename = $request->getSchemeAndHttpHost() . '/storage/category/' . time() . '.' . $request->image->extension();
            $request->image->move(storage_path('app/public/category/'), $filename);
        }
        $products = Category::create([
            'image' => $filename,
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);

        return redirect(route('category.index'));
    }


    public function edit($id){
        $category = Category::find($id);

        return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id){
        $category = Category::find($id);

        $filename = $category->image;
        if($request->hasFile('image')){
            $filename = $request->getSchemeAndHttpHost() . '/storage/category/' . time() . '.' . $request->image->extension();
            $request->image->move(storage_path('app/public/category/'), $filename);
        }

        $category->update([
            'image' => $filename,
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);

        return redirect(route('category.index'));
    }

    public function destroy($id)
    {
        $category = Category::find($id);
    
        if ($category) {
            $category->delete();
            return redirect()->route('category.index')->with('success', 'Category deleted successfully');
        }
    
        return redirect()->route('category.index')->with('error', 'Category not found');
    }
}
