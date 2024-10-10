<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Materi::all();
        $no = 1;

        return view('app.welcome', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materi.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        if ($request->hasFile('gambar')) {

            $imgName =  $request->file('gambar')->getClientOriginalName();
            $request->gambar->move(public_path('images/materi'), $imgName);
            $data['gambar'] = $imgName;
        }
        Materi::create($data);
        return redirect()->route(route: 'index.materi');
    }

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
        $data = Materi::findOrFail($id);

        return view('materi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $req = $request->all();
        $data = Materi::find($request->id);
        if ($request->hasFile('gambar')) {

            $imgName =  $request->file('gambar')->getClientOriginalName();
            $request->gambar->move(public_path('images/materi'), $imgName);
            $req['gambar'] = $imgName;
        } else {
            $req['gambar'] = $request->gambarLama;
        }

        $data->update($req);

        return redirect()->route('index.materi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Materi::findOrFail($id);
        $data->delete();
        return redirect()->route('index.materi');
    }
}
