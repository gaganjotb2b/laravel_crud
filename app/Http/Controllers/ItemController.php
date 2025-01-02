<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function edit($id)
    {
        $product=Product::FindorFail($id);
        return view('UpdateProduct',compact("id","product"));
    }



    // public function update(Request $request, $id)
    // {
    //     $item = Product::find($id);
    //     $item->productName = $request->input('name');
    //     $item->sku = $request->input('sku');
        
    //     $item->save();
    //     return redirect('/items')->with('success', 'Item updated successfully');
    // } 
}
