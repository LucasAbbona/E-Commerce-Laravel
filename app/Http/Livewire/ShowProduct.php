<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use App\Models\Categories;
use Livewire\WithPagination;

class ShowProduct extends Component
{
    use WithPagination;
    public $products;
    public $category_id;
    public $brand;
    public $categoria;
    /* protected $listeners = ['ReloadProducts']; */

    public function mount(){
        $this->products = Products::get();
    }
    public function render()
    {
        return view('livewire.show-product');
    }
    public function ReloadProducts(){
        $this->products = Products::query();
        if($this->category_id){
            $this->products=$this->products->where('category_id',$this->category_id);
        }
        if($this->brand){
            $this->products=$this->products->where('brand',$this->brand);
        }
        if($this->categoria){
            $this->products=$this->products->where('categoria',$this->categoria);
        }
        $this->products = $this->products->get();
    }
}
