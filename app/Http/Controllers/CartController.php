<?php

namespace App\Http\Controllers;

use App\list_products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function listCart()
    {
        return view('cart.listCart');
        // Cart::destroy();
    }

    public function addCart(Request $request, $id)
    {
        $product = list_products::find($id);
        // dd($product);
        // Cart::destroy();
        // $data_id = $request->id;
        // echo ($data_id);
        // $data = array(
        //     'id' => $request->id
        // );
        Cart::add([
            'id' => $product->id,
            'name' => $product->product_lastname,
            'qty' => 1,
            'price' => $product->product_newprice,
            'options' => [
                'thumbnail' => $product->product_avatar,
                'code' => $product->product_code,
                'product_desc' => $product->product_desc
            ]
        ]);
        // return Cart::content();
        return redirect('/cart');
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $qty = $request->qty;
        // echo $qty;
        $cart = Cart::content()->where('id',$id);
        $item = list_products::find($id);
        // if($cart->id)
        foreach ($cart as $row) {
            $row->qty = $qty;
            $row->price = $item->product_newprice;
            $row->subtotal =$qty*$item->product_newprice;
        }
        $numCart = Cart::count();
        // $subtotal = $cart->subtotal;
        $total = Cart::total();
        $data = array(
            'price' => number_format($row->subtotal, 0, ',', '.'),
            'qty' => $row->qty,
            'num_cart' => $numCart,
            'total' => $total
        );
        echo json_encode($data);
    }

    public function removeCart($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart');
    }
}
