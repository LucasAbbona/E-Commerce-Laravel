<x-layout>
    <div class="SingleContainer">
        <div class="SingleImage">
            <img src="{{asset('storage/'.$product->image_path)}}" width="200px" alt="image">
        </div>
        <div class="SingleContent">
            <p class="SingleName">{{$product->name}}</p>
            @if ($product->brand == "otros")
                <p></p>
            @else
                <p class="SingleBrand">{{$product->brand}}</p>
            @endif
            <h3>Details</h3>
            <p class="SingleDetail">{{$product->details}}</p>
            <div class="SinglePrice">
                    <p>$ {{$product->price}}</p>
                    <a class="SingleBtn" href="{{ route('add.to.cart', $product->id) }}">Buy</a>
            </div>
        </div>
    </div>
</x-layout>