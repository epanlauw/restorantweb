<?php

namespace App\Http\Controllers;

use App\Minuman;
use App\Category;
use App\Supplier;
use Illuminate\Http\Request;

class MinumansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minumans = Minuman::all();
        return view('admin.minumans.index', ['minumans' => $minumans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =  Category::all();
        $suppliers = Supplier::all();
        return view('admin.minumans.create', [
          'categories' => $categories,
          'suppliers' => $suppliers,
        ]);
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
            'stock' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'vendor' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
        ]);
        $file_extention = $request->gambar->getClientOriginalExtension();
        $file_name = time().rand(100000,1001238912).'image_minuman.'.$file_extention;
        $request->gambar->move(public_path().'/images/minuman',$file_name);
        Minuman::create([
            'nama' => $request->nama,
            'stock' => $request->stock,
            'harga' => $request->harga,
            'supplier_id' => $request->vendor,
            'category_id' => $request->jenis,
            'image' => $file_name,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/admin/minumans')->with('status','Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Minuman  $minuman
     * @return \Illuminate\Http\Response
     */
    public function show(Minuman $minuman)
    {
        return view('admin.minumans.show',['minuman'=>$minuman]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Minuman  $minuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Minuman $minuman)
    {
        $categories =  Category::all();
        $suppliers = Supplier::all();
        return view('admin.minumans.edit', [
          'categories' => $categories,
          'suppliers' => $suppliers,
          'minuman' => $minuman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Minuman  $minuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Minuman $minuman)
    {
        if($request->hasFile('gambar')) {
          $request->validate([
              'nama' => 'required',
              'stock' => 'required',
              'harga' => 'required',
              'jenis' => 'required',
              'vendor' => 'required',
              'gambar' => 'required',
              'deskripsi' => 'required',
          ]);
          $file_extention = $request->gambar->getClientOriginalExtension();
          $file_name = time().rand(100000,1001238912).'image_minuma.'.$file_extention;
          $request->gambar->move(public_path().'/images/minuman',$file_name);
          Minuman::where('id', $minuman->id)
                ->update([
                  'nama' => $request->nama,
                  'stock' => $request->stock,
                  'harga' => $request->harga,
                  'supplier_id' => $request->vendor,
                  'category_id' => $request->jenis,
                  'image' => $file_name,
                  'deskripsi' => $request->deskripsi,
                ]);
        }else{
          $request->validate([
              'nama' => 'required',
              'stock' => 'required',
              'harga' => 'required',
              'jenis' => 'required',
              'vendor' => 'required',
              'deskripsi' => 'required',
          ]);
          Minuman::where('id', $minuman->id)
                ->update([
                  'nama' => $request->nama,
                  'stock' => $request->stock,
                  'harga' => $request->harga,
                  'supplier_id' => $request->vendor,
                  'category_id' => $request->jenis,
                  'deskripsi' => $request->deskripsi,
                ]);
        }
        return redirect('/admin/minumans')->with('status','Berhasil Diubah');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Minuman  $minuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Minuman $minuman)
    {
      Minuman::destroy($minuman->id);
      return redirect('/admin/minumans')->with('status','Berhasil Dihapus');
    }
}
