<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Pendaftar;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pendaftar::all();
        $no = 1;

        return view('pendaftar.index', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $data = Materi::findOrFail($id);

        // dd($data);
        return view('form', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        // Pendaftar::create($data);
        $pendaftar = Pendaftar::create($data);
        // dd($pendaftar->materi->price);

        $transaksi = Transaksi::create([
            'pendaftar_id' => $pendaftar->id, 
            'materi_id' => $data['materi_id'],
            'harga' => $pendaftar->materi->price,
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $pendaftar->materi->price,
            ),
            'custumer_details' => array(
                'first_name' => $pendaftar->nama,
            )

        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        $transaksi->snap_token = $snapToken;
        $transaksi->save();
        return redirect()->route('invoice', ['id' => $transaksi->id])->with('transaksi', $transaksi);
    }

    // public function transaksi(Request $request)
    // {
    //     $data = $request->all();
        
    //     $pendaftar = Pendaftar::create($data);
    //     dd($pendaftar);

    //     $transaksi = Transaksi::create([
    //         'pendaftar_id' => $pendaftar->id, 
    //         'materi_id' => $data['materi_id'],
    //         'harga' => $data['harga'],
    //     ]);

    //     // Set your Merchant Server Key
    //     \Midtrans\Config::$serverKey = config('midtrans.serverKey');
    //     // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    //     \Midtrans\Config::$isProduction = false;
    //     // Set sanitization on (default)
    //     \Midtrans\Config::$isSanitized = true;
    //     // Set 3DS transaction for credit card to true
    //     \Midtrans\Config::$is3ds = true;

    //     $params = array(
    //         'transaction_details' => array(
    //             'order_id' => rand(),
    //             'gross_amount' => $data['harga'],
    //         ),
    //         'custumer_details' => array(
    //             'first_name' => Pendaftar::get()->nama,
    //         )

    //     );
    //     $snapToken = \Midtrans\Snap::getSnapToken($params);
    //     $transaksi->snap_token = $snapToken;
    //     $transaksi->save();

    //     return redirect()->route('index.materi', $transaksi->id);
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pendaftar::findOrFail($id);
        return view('pendaftar.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $item = Pendaftar::find($request->id);
        // dd($data);
        $item->update($data);

        return redirect()->route('index.pendaftar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function invoice(String $id)
    {
        // $materi = Materi::findOrFail($id);

        $data = Transaksi::findOrFail($id);
        // dd($data);

        return view('invoice', compact('data'));
    }
}
