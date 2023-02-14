<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use PayPal\Api\Order;

class CartController extends Controller
{
    public function cart(){
        return view('cart.cart');
    }
    public function AddToCart($id){
        $product = Products::findOrFail($id);
        $cartContent= session()->get('cartContent',[]);
        if(isset($cartContent[$id])){
            $cartContent[$id]['quantity']++;
        }else{
            $cartContent[$id]=[
                'image_path'=>$product->image_path,
                'name'=>$product->name,
                'brand'=>$product->brand,
                'details'=>$product->details,
                'price'=>$product->price,
                'quantity'=>1,
                
            ];
        }
        session()->put('cartContent', $cartContent);
        return redirect()->back()->with('success','Product added to cart');
    }
    public function DeleteFromCart(Request $request){
        if($request->id){
            $cartContent = session()->get('cartContent');

            if(isset($cartContent[$request->id])){
                unset($cartContent[$request->id]);
                session()->put('cartContent',$cartContent);
            }
            return redirect()->back()->with('success','Product deleted form cart');
        }
    }
    public function UpdateCart(Request $request){
        if($request->id && $request->quantity){
            $cartContent = session()->get('cartContent');
            $cartContent[$request->id]['quantity'] = $request->quantity;
            session()->put('cartContent',$cartContent);
        }
        return redirect()->back();
    }
}
