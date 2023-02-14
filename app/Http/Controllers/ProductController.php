<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function shopPage(){
        $products=Products::all();
        return view('Shop',compact('products'));
    }
    public function showProduct($id){
        $product= Products::FindOrFail($id);
        return view('singleproduct',compact('product'));
    }
    public function publish(Request $request){
        $FormFields= $request->validate([
            'name'=>'required',
            'price'=>['required','numeric'],
            'details'=>'required',
            'brand'=>'required',
            'category_id'=>'required',
            'categoria'=>'required',
            'description'=>'required',
            'shipping_cost'=>'nullable',
            'image_path'=>['required','image','max:15000']
        ]);
        $FormFields['name']=strip_tags($FormFields['name']);
        $FormFields['price']=strip_tags($FormFields['price']);
        $FormFields['details']=strip_tags($FormFields['details']);
        $FormFields['category_id']=strip_tags($FormFields['category_id']);
        $FormFields['categoria']=strip_tags($FormFields['categoria']);
        $FormFields['description']=strip_tags($FormFields['description']);
        $FormFields['brand']=strip_tags($FormFields['brand']);
        $FormFields['image_path']=$request->file('image_path')->store('products','public');
        
        Products::create($FormFields);
        return redirect('/');
    }

}
