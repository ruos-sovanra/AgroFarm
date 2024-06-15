<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('admin.product.index', ['products' => $products]);
    }

    public function create(){
        $categories = Category::all();
        return view('admin.product.create', ['categories' => $categories]);
    }

    public function store(Request $request){
        $filename = "";
        if($request->hasFile('image')){
            $filename = $request->getSchemeAndHttpHost() . '/storage/product/' . time() . '.' . $request->image->extension();
            $request->image->move(storage_path('app/public/product/'), $filename);
        }
        $products = Product::create([
            'image' => $filename,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);
        return redirect(route('product.index'));
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.edit', ['product' => $product, 'categories' => $categories]);
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $filename = $product->image;
        if($request->hasFile('image')){
            $filename = $request->getSchemeAndHttpHost() . '/storage/product/' . time() . '.' . $request->image->extension();
            $request->image->move(storage_path('app/public/product/'), $filename);
        }
        $product->update([
            'image' => $filename,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);
        return redirect(route('product.index'));
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect(route('product.index'));
    }


}
