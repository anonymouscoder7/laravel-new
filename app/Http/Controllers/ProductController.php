<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Product::all(); 
        return view('product',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->desc;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagename = time() . $file->getClientOriginalName();
            $file->move('product', $imagename);
            $product->image = 'product/' . $imagename;
        }
        $product->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit-product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->desc;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagename = time() . $file->getClientOriginalName();
            $file->move('product', $imagename);
            $product->image = 'product/' . $imagename;
        }
        $product->update();
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back();
    }
}
