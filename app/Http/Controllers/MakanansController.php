<?php

namespace App\Http\Controllers;

use App\Makanan;
use Illuminate\Http\Request;

class MakanansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanans =  Makanan::all();
        return view('admin.makanans.index', ['makanans' => $makanans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.makanans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        $file_extention = $request->gambar->getClientOriginalExtension();
        $file_name = time().rand(100000,1001238912).'image_makanan.'.$file_extention;
        $request->gambar->move(public_path().'/images/makanan',$file_name);
        Makanan::create([
            'nama' => $request->nama,
            'stock' => $request->stock,
            'harga' => $request->harga,
            'supplier_id' => $request->vendor,
            'category_id' => $request->jenis,
            'image' => $file_name,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/admin/makanans')->with('status','Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show(Makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Makanan $makanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Makanan $makanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Makanan $makanan)
    {
        //
    }
}
