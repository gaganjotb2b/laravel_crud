<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class Addproduct extends Controller
{







  //get product List
  function productList()
  {
    $all_product = Product::all();
    return view("productList", compact('all_product'));
  }


  //post the data

  function addProduct(Request $request)
  {

    $rule = [
      'productName' => "required",
      'sku' => 'required',

    ];
    $validator = Validator::make($request->all(), $rule);


    if ($validator->fails()) {
      return redirect("/")->withInput()->withErrors($validator);
    }

    $product = new Product();
    $product->productName = $request->productName;
    $product->sku = $request->sku;

    if (Product::where('sku', $product->sku)->exists()) {
      return redirect("productList")->with("fail", "already Stored");
    }

    $product->save();

    return redirect("productList")->with("success", "got data");
  }
}
