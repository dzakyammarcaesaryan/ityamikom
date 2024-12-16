<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Checkout;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function dataBuku(Request $request){
        if($request->ajax()){

            $data = Buku::all();
            return response()->json($data);
        }
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function precessCheckout(Request $request)
    {
        // Validasi form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nomer_telepon' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Simpan pesanan
        $order = Checkout::create([
            'name' => $validated['name'],
            'nomer_telepon' => $validated['nomer_telepon'],
            'email' => $validated['email'],
            'alamat' => $validated['alamat'],
            'jumlah' => $validated['jumlah'],
            'total_harga' => $validated['jumlah'] * 500000, // Misalkan harga per buku adalah 500.000
        ]);

        // return redirect()->route('payment')->with('order', $order);
        return redirect()->route('home');
    }
}