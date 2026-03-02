<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
   public function index() {
    return view('products.index'); 
}

public function create() {
    return view('products.create'); 
}

public function edit($id) {
    return view('products.edit'); 
}
    public function store(Request $request)
    {
        
    }

    
    public function show(Product $product)
    {
        
    }

   
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
