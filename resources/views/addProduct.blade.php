<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <x-admin-nav/>
        <div class=" text-center container m-auto  mt-[50px]">



            <h3 class="bg-black text-white text-center p-9">Add product</h3>

            <form action="/admin/postAddProduct" method="post" class="text-center bg-red-100 pt-10">
                @csrf
                <label for="Product Name" class="text-lg font-normal me-3">Name of Product</label>
                <input value="{{old('productName')}}" type="text" name="productName" placeholder="product_name" class="border border-black p-2 m-2 @error('productName') is-invalid @enderror">
                @error('productName')
                <div class="text-red-800">{{$message}}</div>
                @enderror
                <br>
                <label for="Sku" class="text-lg font-normal me-3">Sku</label>
                <input value="{{old('sku')}}" type="text" name="sku" placeholder="Sku" class="border border-black p-2 m-2 @error('sku') is-invalid @enderror">
                @error('sku')
                <div class="text-red-800">{{$message}}</div>
                @enderror

                <br>

                <button type="submit " class="py-2 px-4 bg-black text-white">Submit</button>
            </form>

        </div>
    </div>
    <a href="/admin/productList"> <button class=" px-4 py-2 rounded bg-black text-white ">View Products</button>
    </a>
</body>

</html>