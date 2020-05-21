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
    public function __construct()
    {

    }

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
      return view('user.makanan');
    }
}
