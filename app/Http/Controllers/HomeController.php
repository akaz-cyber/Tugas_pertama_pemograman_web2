<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Models\Komentar;

class HomeController extends Controller
{
    public function home()
    {
        $wisatas = Wisata::latest()->take(3)->get();

        return view('Home', compact('wisatas'));
    }

    public function about()
    {
        return view('about');
    }

    public function informasi(Request $request)
    {
        $query = Wisata::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $wisatas = $query->paginate(6)->appends($request->query());

        return view('InformasiWisata', compact('wisatas'));
    }

    public function contact()
    {
        return view('contact');
    }


    public function detailwisata($id)
    {
        $wisata = Wisata::findOrFail($id);
        $komentars = Komentar::where('wisata_id', $id)->latest()->get();
        return view('detail', compact('wisata', 'komentars'));
    }

    public function simpanKomentar(Request $request, $id)
    {
        $request->validate([
            'isi' => 'required'
        ]);

        Komentar::create([
            'user_id' => auth()->id(),
            'wisata_id' => $id,
            'isi' => $request->isi
        ]);

        return redirect()->route('detail', $id)->with('success', 'Komentar berhasil ditambahkan.');
    }
}
