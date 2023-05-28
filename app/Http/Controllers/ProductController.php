<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // 05. Basic Crud Oparation




    /**
     * 
     * Display a listing of the resource.
     */

    //  05. Controller
    public function index()
    {

        // View List Of Products
        // Return Full List Of data array
        // return $this->products;
        $products = Product::all();
        return view('products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return Create Product Form View

        return view('create-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get Product Details And Insert In Database
        // return $request;
        // dd();
        Product::create($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Products created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Show Product Using Product Id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Get Product Through Product Id And Show View And Send Data From This View
        $product = Product::find($id);
        return view('edit-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Get Updated Data From Edit View . validate Data and update data.
        $updateProduct = Product::find($id);
        
        // Bind Data
        $updateProduct->tittle = $request->tittle;
        $updateProduct->content = $request->content;
        $updateProduct->sku = $request->sku;
        $updateProduct->price = $request->price;

        // Updated Data
        
        if($updateProduct->update()){
            return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
        }else{
            return redirect()->route('products.index')
            ->with('danger', 'Something Went Wrong.');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete Product Using $id
        Product::find($id)->delete();
        return redirect()->route('products.index')
        ->with('danger', 'Product Delete Successfull');
    }
}
