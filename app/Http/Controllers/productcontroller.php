<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;
class productcontroller extends Controller
{
    //
    function index(){
       $data=Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req){
       
       $data= Product::where('name','like', '%'.$req->input('query').'%')->get();
       return view('search',['products'=>$data]);

    }
    function addtocart(Request $req){
        if($req->session()->has('user'))
        {
           $cart = new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');


        }
        else
        {
            return redirect('/login');
        }
        
    }
    static function cartitem()
    {
        $userid=Session::get('user')['id'];
        return Cart::where('user_id',$userid)->count();
    }
    function cartlist()
    {
        $userid=Session::get('user')['id'];
        $producuts=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userid)
        ->select('products.*','carts.id as cart_id')
        ->get();
        return view('cartlist',['products'=> $producuts]);
    }
    function removeCart($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userid=Session::get('user')['id'];
        $total= $producuts=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userid)
        ->sum('products.price');
        return view('ordernow',['total'=> $total]);
    }
    function oderPlace(Request $req){
        $userid=Session::get('user')['id'];
         $allCart=cart::where('user_id',$userid)->get();
         foreach($allCart as $cart)
         {
             $order= new order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             cart::where('user_id',$userid)->delete();

             
         }
         $req->input();
         return redirect('/');
         
         }
         function myOrders()
         { 
             $userid=Session::get('user')['id'];
            $orders= DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userid)
            ->get();
            return view('myorders',['orders'=> $orders]);
         }
     
    
}
