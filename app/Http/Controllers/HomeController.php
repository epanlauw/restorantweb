<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use App\Minuman;
use App\Transaksi;
use App\Rating;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $makanans = Makanan::all();
        $minumans = Minuman::all();
        return view('welcome',[
          'makanans' => $makanans,
          'minumans' => $minumans
        ]);
    }

    public function userHome()
    {
        $makanans = Makanan::all();
        $minumans = Minuman::all();
        return view('user.home',[
          'makanans' => $makanans,
          'minumans' => $minumans
        ]);
    }

//makanan
    public function makanan()
    {
      $makanans = Makanan::paginate(6);
      $links = $makanans->links();
      return view('user.makanans',[
        'makanans' => $makanans,
        'links' => $links,
      ]);
    }

    public function makananNameAsc()
    {
      $makanans = Makanan::orderBy('nama', 'asc')->paginate(6);
      $links = $makanans->appends(['sort' => 'nama'])->links();
      return view('user.makanans',[
        'makanans' => $makanans,
        'links' => $links,
      ]);
    }

    public function makananNameDesc()
    {
      $makanans = Makanan::orderBy('nama', 'desc')->paginate(6);
      $links = $makanans->appends(['sort' => 'nama'])->links();
      return view('user.makanans',[
        'makanans' => $makanans,
        'links' => $links,
      ]);
    }

    public function makananPriceAsc()
    {
      $makanans = Makanan::orderBy('harga', 'asc')->paginate(6);
      $links = $makanans->appends(['sort' => 'harga'])->links();
      return view('user.makanans',[
        'makanans' => $makanans,
        'links' => $links,
      ]);
    }

    public function makananPriceDesc()
    {
      $makanans = Makanan::orderBy('harga', 'desc')->paginate(6);
      $links = $makanans->appends(['sort' => 'harga'])->links();
      return view('user.makanans',[
        'makanans' => $makanans,
        'links' => $links,
      ]);
    }

    public function makananSearch(Request $request)
    {
      if ($request->search == '') {
        return back();
      }else{
        $searchs = Makanan::where('nama','like','%'.$request->search.'%')->get();
        return view('user.makanans',[
          'makanans' => $searchs,
          'links' => '',
        ]);
      }
    }

    public function showMakanan(Makanan $makanan)
    {
        return view('user.detail_makanan',['makanan'=>$makanan]);
    }

//minuman
    public function minuman()
    {
      $minumans = Minuman::paginate(6);
      $links = $minumans->links();
      return view('user.minumans',[
        'minumans' => $minumans,
        'links' => $links,
      ]);
    }

    public function minumanNameAsc()
    {
      $minumans = Minuman::orderBy('nama', 'asc')->paginate(6);
      $links = $minumans->appends(['sort' => 'nama'])->links();
      return view('user.minumans',[
        'minumans' => $minumans,
        'links' => $links,
      ]);
    }

    public function minumanNameDesc()
    {
      $minumans = Minuman::orderBy('nama', 'desc')->paginate(6);
      $links = $minumans->appends(['sort' => 'nama'])->links();
      return view('user.minumans',[
        'minumans' => $minumans,
        'links' => $links,
      ]);
    }

    public function minumanPriceAsc()
    {
      $minumans = Minuman::orderBy('harga', 'asc')->paginate(6);
      $links = $minumans->appends(['sort' => 'harga'])->links();
      return view('user.minumans',[
        'minumans' => $minumans,
        'links' => $links,
      ]);
    }

    public function minumanPriceDesc()
    {
      $minumans = Minuman::orderBy('harga', 'desc')->paginate(6);
      $links = $minumans->appends(['sort' => 'harga'])->links();
      return view('user.minumans',[
        'minumans' => $minumans,
        'links' => $links,
      ]);
    }

    public function minumanSearch(Request $request)
    {
      if ($request->search == '') {
        return back();
      }else{
        $searchs = Minuman::where('nama','like','%'.$request->search.'%')->get();
        return view('user.minumans',[
          'minumans' => $searchs,
          'links' => '',
        ]);
      }
    }

    public function showMinuman(Minuman $minuman)
    {
        return view('user.detail_minuman',['minuman'=>$minuman]);
    }

    public function history()
    {
        $transaksis = Transaksi::all();
        return view('user.history',['transaksis'=>$transaksis]);
    }

    public function rating()
    {
      $ratings = Rating::all();
      return view('user.rating',['ratings' => $ratings]);
    }
}
