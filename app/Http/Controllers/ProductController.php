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
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,png,gif,svg|max:2048',
            'description' => 'required',
            'poids' => 'required',
            'taille' => 'required',
            'stockQuantity' => 'required'
        ]);
        $product = $request->all();
        if($image = $request->file('image')){
            $image_path = 'images';
            $image_extnsion = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($image_path, $image_extnsion);
            $product['image'] = $image_extnsion;
        }
        Product::create($product);
        return redirect()->route('products.index')
        ->with('success', 'Product Was Created Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'poids' => 'required',
            'taille' => 'required',
            'stockQuantity' => 'required'
        ]);

        $productInput = $request->all();

        if ($request->hasFile('image')) {
            $image_path = 'images';
            $image_extnsion = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($image_path, $image_extnsion);
            $productInput['image'] =  $image_extnsion;
        } elseif (!isset($productInput['image'])) {
            $productInput['image'] = null;
        }

        $product->update($productInput);

        return redirect()->route('products.index')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product Deleted Successfully');
    }
}
