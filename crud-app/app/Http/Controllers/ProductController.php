<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
   public function index(){
    $products = Product::get();
    return view('products.index', ['products' => $products]);
}

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        
          $request->validate([
        'name' => 'required',
        'mrp' => 'required|numeric',
        'price' => 'required|numeric',
        'description' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
          ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->mrp = $request->mrp;
        $product->price = $request->price;
        $product->save();
        return redirect('/')->with('success', 'Product Added Successfully');    }


public function show($id)
{
    $product=Product::where('id',$id)->first();
    return view('products.show',['product'=>$product]);
}

public function edit($id)
{ 
    $product=Product::where('id',$id)->first();
    return view('products.edit',['product'=>$product]);
}

public function update(Request $request,$id)
{
      $request->validate([
        'name' => 'required',
        'mrp' => 'required|numeric',
        'price' => 'required|numeric',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
          ]);

        $product=Product::where('id',$id)->first();

        if(isset($request->image))
            {
                $imageName=time ().".".$request->image->extension();
                $request->image->move(public_path('products'), $imageName);
                $product->image=$imageName;
            }


        $product->name = $request->name;
        $product->description = $request->description;
        $product->mrp = $request->mrp;
        $product->price = $request->price;
        $product->save();
        return redirect('/')->with('success', 'Product Updated Successfully');    
}

public function destroy($id)
{
    $product=Product::where('id',$id)->first();
    $product->delete();
    return redirect('/')->with('success', 'Product deleted Successfully');    

    }


}