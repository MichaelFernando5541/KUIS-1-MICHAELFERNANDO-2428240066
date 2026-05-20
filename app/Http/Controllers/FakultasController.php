<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fakultas::orderByDesc('created_at')->get();

        return view('fakultas.list-fakultas', ['fakultas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.add-fakultas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_fakultas' => ['required', 'max:5'],
            'nama_dekan' => ['required', 'max:5'],
        ], [
            'nama_fakultas.required' => 'nama fakultas wajib di isi WOIIII,tidak boleh kosong',
            'nama_dekan.required' => 'nama dekan wajib di isi BOSSSSSSSS',
            'nama_fakultas.max ' => 'nama fakultas,maksimal 5  BOSSSSSSSS',
            'nama_dekan.max' => 'nama dekan,maksimal 5 karakter yeee',
        ]);

        Fakultas::create([
            'nama_fakultas' => $request->nama_fakultas,
            'nama_dekan' => $request->nama_dekan,
        ]);

        return redirect('/fakultas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakulta)
    {
        return view('fakultas.detail-fakultas', [
            'fakultas' => $fakulta,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakulta)
    {

        return view('fakultas.edit-fakultas', [
            'fakultas' => $fakulta,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakulta)
    {
        $validated = $request->validate([
            'nama_fakultas' => ['required', 'max:5'],
            'nama_dekan' => ['required', 'max:5'],
        ], [
            'nama_fakultas.required' => 'nama fakultas wajib di isi WOIIII,tidak boleh kosong',
            'nama_dekan.required' => 'nama dekan wajib di isi BOSSSSSSSS',
            'nama_fakultas.max' => 'nama fakultas,maksimal 5  BOSSSSSSSS',
            'nama_dekan.max' => 'nama dekan,maksimal 5 karakter yeee',
        ]);
        $fakulta->update([
            'nama_fakultas' => $request->nama_fakultas,
            'nama_dekan' => $request->nama_dekan,
        ]);

        return redirect('/fakultas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakulta)
    {
        $fakulta->delete();

        return redirect()->back();
    }
}
