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
        <div class=" border border-red-100 text-center">
   
           

            <h3 class="bg-black text-white text-center">Add product</h3>

            <form action="addProduct" method="post" class="text-center bg-red-100 pt-10">
                @csrf
                <label for="Product Name" class="text-lg font-normal me-3">Product Name</label>
                <input  value="{{old('productName')}}"type="text" name="productName"  placeholder="product_name" class="border border-black p-2 m-2 @error('productName') is-invalid @enderror" >
                @error('productName')
   <div class="text-red-800">{{$message}}</div>
                @enderror
                <br>
                <label for="Sku" class="text-lg font-normal me-3">Sku</label>
                <input value="{{old('sku')}}" type="text" name="sku" placeholder="Sku" class="border border-black p-2 m-2 @error('sku') is-invalid @enderror" >
@error('sku')
<div class="text-red-800">{{$message}}</div>
@enderror

                <br>
                
                <button type="submit " class="py-2 px-4 bg-black text-white">Submit</button>
            </form>

        </div>
    </div>
</body>

</html>