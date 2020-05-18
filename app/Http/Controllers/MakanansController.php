<?php

namespace App\Http\Controllers;

use App\Makanan;
use App\Supplier;
use App\Category;
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
        $categories =  Category::all();
        $suppliers = Supplier::all();
        return view('admin.makanans.create', [
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
        return view('admin.makanans.show',['makanan'=>$makanan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Makanan $makanan)
    {
      $categories =  Category::all();
      $suppliers = Supplier::all();
      return view('admin.makanans.edit', [
        'categories' => $categories,
        'suppliers' => $suppliers,
        'makanan' => $makanan
      ]);
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
      if($request->hasFile('gambar')) {
        $file_extention = $request->gambar->getClientOriginalExtension();
        $file_name = time().rand(100000,1001238912).'image_makanan.'.$file_extention;
        $request->gambar->move(public_path().'/images/makanan',$file_name);
        Makanan::where('id', $makanan->id)
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
        Makanan::where('id', $makanan->id)
              ->update([
                'nama' => $request->nama,
                'stock' => $request->stock,
                'harga' => $request->harga,
                'supplier_id' => $request->vendor,
                'category_id' => $request->jenis,
                'deskripsi' => $request->deskripsi,
              ]);
      }
      return redirect('/admin/makanans')->with('status','Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Makanan $makanan)
    {
        Makanan::destroy($makanan->id);
        return redirect('/admin/makanans')->with('status','Berhasil Dihapus');
        // return $makanan;
    }
}
