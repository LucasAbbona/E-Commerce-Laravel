<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class FavController extends Controller
{
    public function Favs(){
        return view('favourites.show');
    }
    public function AddToFav($id){
        $product = Products::findOrFail($id);
        $favsContent= session()->get('favsContent',[]);
        if(isset($favsContent[$id])){
            return redirect()->back();
        }else{
            $favsContent[$id]=[
                'image_path'=>$product->image_path,
                'name'=>$product->name,
                'brand'=>$product->brand,
                'details'=>$product->details,
                'price'=>$product->price,
                
            ];
        }
        session()->put('favsContent', $favsContent);
        return redirect('favourites')->with('success','Product added to favourites');
    }
    public function DeleteFromFav(Request $request){
        if($request->id){
            $favsContent = session()->get('favsContent');

            if(isset($favsContent[$request->id])){
                unset($favsContent[$request->id]);
                session()->put('favsContent',$favsContent);
            }
            return redirect()->back()->with('success','Product deleted from favourites');
        }
    }
}
