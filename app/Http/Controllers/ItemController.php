<?php

namespace App\Http\Controllers; // Menentukan namespace agar controller ini berada dalam folder Controllers

use App\Models\Item; // Mengimpor model Item untuk berinteraksi dengan database
use Illuminate\Http\Request; // Mengimpor class Request untuk menangani input dari pengguna

class ItemController extends Controller // Mendeklarasikan kelas ItemController yang merupakan turunan dari Controller
{
    /**
     * Menampilkan daftar item.
     */
    public function index()
    {
        $items = Item::all(); // Mengambil semua data dari tabel items dalam database
        return view('items.index', compact('items')); // Mengirimkan data ke view items/index.blade.php
    }

    /**
     * Menampilkan form untuk menambahkan item baru.
     */
    public function create()
    {
        return view('items.create'); // Menampilkan view form tambah item (items/create.blade.php)
    }

    /**
     * Menyimpan data item baru ke dalam database.
     */
    public function store(Request $request)
    {
        // Melakukan validasi input, memastikan name dan description harus diisi
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        // Menyimpan data yang diizinkan ke database
        Item::create($request->only(['name', 'description']));

        // Redirect ke halaman daftar item dengan pesan sukses
        return redirect()->route('items.index')->with('success', 'Item added successfully.');
    }

    /**
     * Menampilkan detail item berdasarkan ID.
     */
    public function show(string $id)
    {
        $item = Item::findOrFail($id); // Mencari item berdasarkan ID, jika tidak ditemukan akan menampilkan error 404
        return view('items.show', compact('item')); // Mengirimkan data ke view items/show.blade.php
    }

    /**
     * Menampilkan form edit item berdasarkan ID.
     */
    public function edit(string $id)
    {
        $item = Item::findOrFail($id); // Mencari item berdasarkan ID, jika tidak ditemukan akan menampilkan error 404
        return view('items.edit', compact('item')); // Mengirimkan data ke view items/edit.blade.php
    }

    /**
     * Memperbarui data item yang sudah ada di database.
     */
    public function update(Request $request, Item $item)
    {
        // Melakukan validasi input, memastikan name dan description harus diisi
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        // Memperbarui item dengan data yang diizinkan
        $item->update($request->only(['name', 'description']));

        // Redirect ke halaman daftar item dengan pesan sukses
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    /**
     * Menghapus item dari database.
     */
    public function destroy(Item $item)
    {
        $item->delete(); // Menghapus item dari database
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.'); // Redirect dengan pesan sukses
    }
}
