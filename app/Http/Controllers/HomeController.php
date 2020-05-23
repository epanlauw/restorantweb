<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use App\Minuman;

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

    public function showMakanan(Makanan $makanan)
    {
        return view('user.detail_makanan',['makanan'=>$makanan]);
    }

    public function showMinuman(Minuman $minuman)
    {
        return view('user.detail_minuman',['minuman'=>$minuman]);
    }
}
