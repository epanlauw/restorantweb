<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use App\Minuman;

class CartController extends Controller
{

    public function index()
    {
      $cartItems = \Cart::session(auth()->id())->getContent();
      return view('user.cart', ['cartItems' =>  $cartItems]);
    }

    public function addMakanan(Makanan $makanan)
    {
      \Cart::session(auth()->id())->add(array(
          'id' => 'MA'.$makanan->id,
          'name' => $makanan->nama,
          'price' => $makanan->harga,
          'quantity' => 1,
          'attributes' => array(),
          'associatedModel' => $makanan,
      ));

      return redirect()->route('cart.index');
    }

    public function addMinuman(Minuman $minuman)
    {
      \Cart::session(auth()->id())->add(array(
          'id' => 'MI'.$minuman->id,
          'name' => $minuman->nama,
          'price' => $minuman->harga,
          'quantity' => 1,
          'attributes' => array(),
          'associatedModel' => $minuman,
      ));

      return redirect()->route('cart.index');
    }

    public function destroy($itemId)
    {
      \Cart::session(auth()->id())->remove($itemId);
      return back();
    }

    public function update($rowId)
    {
        \Cart::session(auth()->id())->update($rowId, [
          'quantity' => array(
               'relative' => false,
               'value' => request('quantity')
           ),
        ]);

        return back();
    }
}
