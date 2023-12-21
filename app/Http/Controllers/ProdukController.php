<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\product;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProdukController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $produk = product::get();

        //render view with posts
        return view('produk.index', compact('produk'));
    }
    public function create(){
        return view('produk.create');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'product'    => 'required|min:6',
            'price'     => 'required',
            'stock'     => 'required',
        ], [
            'produk.required'   => 'Nama Produk harus di isi',
        ]);
        $validator->validate();

        product::create([
            'product' => $request->product,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect('/produk')->with('success', 'Data berhasil disimpan');
    }
    public function edit($id)
    {
    $produk = product::find($id);
    return view('produk.edit', compact('produk'));
    }
    public function destroy($id)
    {
        $produk = Product::find($id);

        if (!$produk) {
            return redirect('/produk')->with('error', 'Produk tidak ditemukan');
        }

        $produk->delete();

        return redirect('/produk')->with('success', 'Produk berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $produk = product::find($id);
        $produk->product = $request->product;
        $produk->price = $request->price;
        $produk->stock = $request->stock;
        $produk->save();

        return redirect('/produk')->with('success', 'data berhasil diedit');
    }
}