<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use App\Minuman;
use App\Transaksi;

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

    public function update($rowId, Request $request)
    {
        $cartItems = \Cart::session(auth()->id())->getContent($rowId);
        foreach ($cartItems as $item) {
          if ($item->id == $rowId) {
            $request->validate([
              'quantity' => 'required|integer|between:0,'.$item->associatedModel->stock
            ]);
            \Cart::session(auth()->id())->update($rowId, [
              'quantity' => array(
                   'relative' => false,
                   'value' => $request->quantity
               ),
            ]);
          }
        }
        return back();
    }

    public function checkout()
    {
        // $tgl_pesan = Carbon\Carbon::now();
        $cartItems = \Cart::session(auth()->id())->getContent();
        foreach ($cartItems as $item) {
          if (substr($item->id,0,2) ==  'MA') {
            Transaksi::create([
                'customer_id' => auth()->id(),
                'makanan_id' => $item->associatedModel->id,
                // 'rating_id' => $request->harga,
                'jml_makanan' => $item->quantity,
                'jml_minuman' =>  0,
                'total_harga' => \Cart::session(auth()->id())->get($item->id)->getPriceSum(),
                'alamat' => auth()->user()->alamat,
                'kota' => auth()->user()->kota
            ]);
            Makanan::where('id', $item->associatedModel->id)
                  ->update([
                    'stock' => ($item->associatedModel->stock - $item->quantity),
                  ]);
          } else {
            Transaksi::create([
                'customer_id' => auth()->id(),
                'minuman_id' => $item->associatedModel->id,
                // 'rating_id' => $request->harga,
                'jml_makanan' => 0,
                'jml_minuman' =>  $item->quantity,
                'total_harga' => \Cart::session(auth()->id())->get($item->id)->getPriceSum(),
                'alamat' => auth()->user()->alamat,
                'kota' => auth()->user()->kota,
                'tgl_pesan' => $tgl_pesan
            ]);
            Minuman::where('id', $item->associatedModel->id)
                  ->update([
                    'stock' => ($item->associatedModel->stock - $item->quantity),
                  ]);
          }
        }
        \Cart::session(auth()->id())->clear();
        return redirect('/home');
    }
}
