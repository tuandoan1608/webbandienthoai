<?php

namespace App\Http\Controllers;

use App\product;
use App\Wishlist;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Session;

class wishlistController extends Controller
{
    public function index()
    {
        $oldwishlist=Session::get('wishlist');
        $wishlist=new Wishlist($oldwishlist);
        $wishlists=$wishlist->item;
        return view('client.wishlist.index',compact('wishlists'));
    }
    public function addwishlist(Request $request ,$id)
    {
        $product=product::find($id);
        $oldwishlist=Session('wishlist')? Session::get('wishlist'):null;
        $wishlist=new Wishlist($oldwishlist);
        $wishlist->add($product,$id);
        $request->session()->put('wishlist',$wishlist);
        return back();
    }
    public function removewishlist($id)
    {
        $oldwish=Session::has('wishlist')?Session::get('wishlist'):null;
        $wishlist= new Wishlist($oldwish);
        $wishlist->deletewish($id);
        Session::put('wishlist', $wishlist);
    }
}
