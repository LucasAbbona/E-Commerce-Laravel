    <x-layout>
        <div class="FavTitle">
            <h2>Your Favourites List</h2>
        </div>
        <div class="FavContainer">
            <div class="SingleFavGuide">
                <p>Image</p>
                <p>Name</p>
                <p>Details</p>
                <p>Price</p>
            </div>
            @if (session('favsContent'))
            @foreach (session('favsContent') as $key=>$value)
            <div class="SingleFav">
            <img src="{{asset('storage/'.$value['image_path'])}}" alt="some image">
            <div class="FavNameBrandContainer">
                <p class="FavName">{{$value['name']}}</p>
                <p class="FavBrand">{{$value['brand']}}</p>
            </div>
            <p class="FavDetails">{{$value['details']}}</p>
            <p class="FavPrice">${{$value['price']}}</p>
            <a class="FavAdd" href="{{route('add.to.cart',$key)}}">Add to Cart</a>
            <a class="FavDelete" href="{{route('delete.from.fav',$key)}}">Delete</a>
        </div>
        @endforeach
            @else
                <p class="FavsEmpty">Favourites is empty</p>
        </div>
    @endif
    </x-layout>