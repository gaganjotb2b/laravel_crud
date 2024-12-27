<div>
    <a href="/"><button>Back</button></a>
    <a href="/productList"><button>View Database</button></a>
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
        <ul>
            <li class="text-black text-lg">product_name - SKU</li>
            @foreach($all_product as $product)
                <li>{{ $product->productName }} - {{ $product->sku }}</li>
            @endforeach
        </ul>
    @endif


</div>