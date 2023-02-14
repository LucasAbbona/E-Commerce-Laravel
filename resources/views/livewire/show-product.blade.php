
<div class="ProductsContainerSon">
<div class="FoundedResults">
    <h2>{{count($products)}} results found.</h2>
</div>
    <div class="FilterContainer">
        <h3>Filters</h3>
        <div class="AllFilters">
            <div class="FiltersList">
                <label for="">Gender</label>
            <select wire:model="category_id" wire:change="ReloadProducts" name="" id="">
                <option value="">Todos</option>
                    <option value="1">Hombre</option>
                    <option value="2">Mujer</option>
            </select>
            </div>
            <div class="FiltersList">
                <label for="">Brand</label>
            <select wire:model="brand" wire:change="ReloadProducts" name="" id="">
                <option value="">Todos</option>
                <option value="zara">Zara</option>
                <option value="melissa">Melissa Odabash</option>
                <option value="bask">Bask</option>
                <option value="hym">H&M</option>
                <option value="rusty">Rusty</option>
                <option value="ripcurl">RipCurl</option>
                <option value="otros">Otra</option>
            </select>
            </div>
            <div class="FiltersList">
                <label for="">Category</label>
            <select wire:model="categoria" wire:change="ReloadProducts" name="" id="">
                <option value="">Todos</option>
                <option value="remeras">Remeras</option>
                <option value="pantalon">Pantalones</option>
                <option value="short">Shorts</option>
                <option value="camisas">Camisas</option>
                <option value="otros">Otros</option>
            </select>
            </div>
        </div>
    </div>
    <div class="ListOfProducts">
        @foreach ($products as $key=>$product)
        <div class="ProductCont">
        <a href="/product/{{$product->id}}" class="ProductName">{{$product->name}}</a>
        <p class="ProductPrice">${{$product->price}}
        </p>
        <div class="ProductImage">
            <img src="{{asset('storage/'.$product->image_path)}}" alt="">
        </div>
        @if (isset(session('favsContent')[$product->id]))
        <a class="FavouriteBtn" href="{{ route('delete.from.fav', $product->id) }}"><i class="bi bi-heart-fill"></i></a>
        @else
        <a class="FavouriteBtn" href="{{ route('add.to.fav', $product->id) }}"><i class="bi bi-heart"></i></a>
        @endif
        
        
        </div>
    @endforeach
    </div>
    
</div>
