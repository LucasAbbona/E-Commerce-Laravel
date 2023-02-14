<?php

namespace App\Http\Livewire;

use App\Models\Categories;
use App\Models\Products;
use Livewire\Component;

class FilterProduct extends Component
{
    public $category_id;
    public function render()
    {
        $categories = Categories::get();
        /*return view('livewire.filter-product',['categories'=>$categories]); */
        return view('livewire.filter-product',['categories'=>$categories]);
    }
    public function filter(){
        $this->emitTo('show-product','ReloadProducts',$this->category_id);
    }
}
