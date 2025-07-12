<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisatas = Wisata::latest()->paginate(5);
        return view("admin.adminwisata", compact('wisatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createwisata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'judul' => 'required|string|max:255|unique:wisatas,judul',
            'deskripsi' => 'required|string',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Simpan file foto ke storage
        $photoPath = $request->file('photo')->store('wisata', 'public');

        // Simpan data ke database
        Wisata::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'photo' => $photoPath
        ]);

        return redirect()->route('wisatas')->with('success', 'Data wisata berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view("admin.showadmin", compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view("admin.admineditwisata", compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $wisata = Wisata::findOrFail($id);

        // Update hanya jika ada file photo baru
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('wisata', 'public');
            $wisata->photo = $photoPath;
        }

        $wisata->judul = $request->judul;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->save();

        return redirect()->route('wisatas')->with('success', 'Wisata updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wisata $wisata)
    {
        // Hapus file foto dari storage
        if (Storage::disk('public')->exists($wisata->photo)) {
            Storage::disk('public')->delete($wisata->photo);
        }

        // Hapus data dari database
        $wisata->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('wisatas')->with('success', 'Data wisata berhasil dihapus.');
    }



}
