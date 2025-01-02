@vite("resources/css/app.css")
<div class="container m-auto">
    {{$id}}
    {{$product}}




    <h3 class="bg-black text-white text-center p-9">Update product</h3>

    <form action="{{route('product.update',$product->id)}}" method="post" class="text-center bg-red-100 pt-10">
        @csrf
        @method("PUT")
        <label for="Product Name" class="text-lg font-normal me-3">Product Name</label>
        <input value="{{old('productName',$product->productName)}}" type="text" name="productName" placeholder="product_name" class="border border-black p-2 m-2 @error('productName') is-invalid @enderror">
        @error('productName')
        <div class="text-red-800">{{$message}}</div>
        @enderror
        <br>
        <label for="Sku" class="text-lg font-normal me-3">Sku</label>
        <input value="{{old('sku',$product->sku)}}" type="text" name="sku" placeholder="Sku" class="border border-black p-2 m-2 @error('sku') is-invalid @enderror">
        @error('sku')
        <div class="text-red-800">{{$message}}</div>
        @enderror

        <br>

        <button type="submit " class="py-2 px-4 bg-black text-white">Update</button>
    </form>

</div>
</div>
<a href="/admin/productList"> <button class=" px-4 py-2 rounded bg-black text-white ">View Products</button>
</a>
</form>
</div>