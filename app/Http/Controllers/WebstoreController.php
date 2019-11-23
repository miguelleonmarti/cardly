<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;

class WebstoreController extends Controller
{
    # Our function for adding a certain product to the cart
    public function addToCart($id)
    {
        $type = Type::find($id);
        \Cart::add($type->id, $type->name, 1, $type->price);
        return redirect('/recharge'); // TODO: change routes
    }
    # Our function for removing a certain product from the cart
    public function removeFromCart(Request $request)
    {
        \Cart::remove($request->rowId);
        return redirect('/'); // TODO: change routes
    }
    # Our function for clearing all items from our cart
    public function destroyCart()
    {
        \Cart::destroy();
        return redirect('/'); // TODO: change routes
    }
}
