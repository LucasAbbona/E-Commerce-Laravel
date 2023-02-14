<x-layout>
    <div class="ImgPrincipal">
        <img src="../images/banner.png" alt="">
        <div class="HeroText">
        <a href="/shop">Shop Now</a>
        </div>   
    </div>
    <div class="ImgAdvertisement">
        <img src="https://media.istockphoto.com/id/1199442972/photo/happy-beautiful-young-woman-in-blue-dress-and-hand-holding-shopping-bags-and-looking-at-on.jpg?s=170667a&w=0&k=20&c=jGVby-U8kt_2jUM-Gduog3zFaSoJtW4cEy0c3SJI1go=" alt="">
        <div class="BtnSummer">
            <p>Check on our new collection</p>
            <div class="BackSummer"></div>
            <a href="/shop">SUMMER 2023</a>
        </div>
    </div>
    <div class="BestSell">
        <h2>Featured</h2>
        <div class="BestSellersContainer">
            @foreach ($products as $product)
        <div class="ProductCont">
            <a href="/product/{{$product->id}}" class="ProductName">{{$product->name}}</a>
            <p class="ProductPrice">${{$product->price}}
            </p>
            <div class="ProductImage">
                <img src="{{asset('storage/'.$product->image_path)}}" alt="">
            </div>
            <a class="MoreInfoBtn" href="/product/{{$product->id}}">More Info</a>
            </div>
        @endforeach
        </div>
        
    </div>

</x-layout>