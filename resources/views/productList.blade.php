<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite('resources/css/app.css')

<body>
    <div>
        <!-- NAvbar of admin-->
        <x-admin-nav />

        <br>
        @if(Session::has("success"))
        <h1 class="bg-green-100">{{Session::get("success")}}</h1>
        @endif


        @if(Session::has("fail"))
        <h1 class="bg-red-100">{{Session::get("fail")}}</h1>
        @endif

        @if($all_product->isEmpty())
        <p>No products available</p>
        @else
        <!-- Loop through the products -->


        <table class="">
            <thead>
                <tr>
                    <th class="border border-black px-2 py-2">ID of Product</th>
                    <th class="border border-black px-2 py-2">Name of Product</th>
                    <th class="border border-black px-2 py-2">SKU of Product</th>
                    <th class="border border-black px-2 py-2">Update</th>
                    <th class="border border-black px-2 py-2">Delete</th>
                </tr>
            </thead>





            @foreach($all_product as $product)
            <tr>
                <th class="border border-black px-2 py-2">{{$product->id}}</th>
                <th class="border border-black px-2 py-2">{{$product->productName}}</th>
                <th class="border border-black px-2 py-2">{{$product->sku}}</th>

                <th class="border border-black px-2 py-2"><a href="{{route("product.edit",[$product->id])}}" class="hover:bg-green-600 px-3 py-2 rounded"><i class="fa-solid fa-pen"></i> </a></th>


                <th class="border border-black px-2 py-2">

                    <form action="{{ route('product.delete', $product->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">
                            Delete
                        </button>
                    </form>


                </th>

            </tr>
            @endforeach

            @endif

        </table>
    </div>
</body>

</html>