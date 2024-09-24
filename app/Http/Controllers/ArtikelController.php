<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function indexDashboard()
    {
        $artikels = Artikel::all();
        return view('dashboard.artikel.index',compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function createDashboard()
    {
        return view('dashboard.artikel.create');
    }

    public function editDashboard($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('dashboard.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateDashboard(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|max:2048', // gambar opsional
        ]);

        // Temukan artikel
        $artikel = Artikel::findOrFail($id);

        // Proses upload gambar jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($artikel->gambar) {
                Storage::disk('public')->delete($artikel->gambar);
            }
            $artikel->gambar = $request->file('gambar')->store('images/artikel', 'public');
        }

        // Update data artikel
        $artikel->judul = $request->input('judul');
        $artikel->kategori = $request->input('kategori');
        $artikel->konten = $request->input('konten');
        $artikel->save();

        // Redirect ke halaman daftar artikel dengan pesan sukses
        return redirect()->route('artikel-dashboard.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function showDashboard($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('dashboard.artikel.show', compact('artikel'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyDashboard($id)
    {
        $artikel = Artikel::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($artikel->gambar) {
            Storage::disk('public')->delete($artikel->gambar);
        }

        // Hapus artikel
        $artikel->delete();

        // Redirect ke halaman daftar artikel dengan pesan sukses
        return redirect()->route('artikel-dashboard.index')->with('success', 'Artikel berhasil dihapus.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function storeDashboard(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|max:2048', // gambar opsional, max 2MB
        ]);

        // Proses upload gambar jika ada
        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images/artikel', 'public');
        }

        // Simpan artikel
        $artikel = new Artikel();
        $artikel->judul = $request->input('judul');
        $artikel->kategori = $request->input('kategori');
        $artikel->konten = $request->input('konten');
        $artikel->gambar = $path;
        $artikel->save();

        // Redirect ke halaman daftar artikel dengan pesan sukses
        return redirect()->route('artikel-dashboard.index')->with('success', 'Artikel berhasil disimpan.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
