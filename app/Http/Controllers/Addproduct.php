<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class Addproduct extends Controller
{


  //update product
  function updateProduct($id, Request $request)
  {

    $product = Product::findorFail($id);



    $rule = [
      "productName" => "required",
      "sku" => "required"
    ];

    $validator = Validator::make($request->all(), $rule);

    if ($validator->fails()) {

      return redirect(route("product.edit", $id))->withInput()->withErrors($validator);
    }

    $product->productName = $request->productName;
    $product->sku = $request->sku;
    $product->save();
    return redirect("/admin/productList")->with("success", "Updated");
  }


  //delete product
  function deleteProduct($id)
  {

    $product = Product::findorFail($id);
    $product->delete();

    return redirect("/admin/productList")->with("success", "Deleted Successfuly");
  }




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
      return redirect("/admin/addProduct")->withInput()->withErrors($validator);
    }

    $product = new Product();
    $product->productName = $request->productName;
    $product->sku = $request->sku;

    if (Product::where('sku', $product->sku)->exists()) {
      return redirect("/admin/productList")->with("fail", "already Stored");
    }

    $product->save();

    return redirect("/admin/productList")->with("success", "got data");
  }
}
