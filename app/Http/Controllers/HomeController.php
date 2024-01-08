<?php

namespace App\Http\Controllers;

use App\Models\Admin\Voucher;
use App\Models\Backend\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * ini adalah function untuk home halaman 
     * depan dari webiste p[os] yang buat
     */
    public function index()
    {
        // variabel baru
        $data = Product::all();
        $cart = Cart::with('product')->get();
        return view('home.product', compact('data', 'cart'));
    }

    public function store(Request $request)
    {
        // cek input
        // dd($request->all());

        $cek = Product::find($request->id);
        if (empty($cek)) {
            # jika tidak ada barang maka 
            return redirect()->route('index')->with('galat', 'Product Tidak Ada');
        } else {
            # kalau ada maka

            // cek barang di keranjang
            $cart = Cart::where('product_id', $cek->id)->first();
            if (empty($cart)) {
                # kalo keranjang kosong maka
                Cart::create([
                    'product_id' => $cek->id,
                    'jumlah' => 1,
                    'harga' => $cek->harga
                ]);

                return redirect()->route('product')->with('success', 'Kue Berhasil Masuk Keranjang');
            } else {
                # kalau sudah ada maka tambahkan jumlah dan harga 
                $cart->update([
                    'jumlah' => $cart->jumlah + 1,
                    'harga' => $cart->harga + $cek->harga
                ]);

                // dd('update keranjang berhasil');
                return redirect()->route('product')->with('success', 'Keranjang Kue Berhasil di update');
            }   
        }
    }

    public function destroy()
    {
        Cart::truncate();
        // dd('keranjang dihapus semua');
        return redirect()->route('product')->with('success', 'Keranjang dihapus');
    }

    public function hapus_item($id)
    {
        $cart = Cart::find($id);
        if (empty($cart)) {
            # code...
            return back()->with('galat', 'Item Tidak Ada');
        }

        $cart->delete();

        return redirect()->route('product')->with('success', 'Item Keranjang dihapus');
    }
}
