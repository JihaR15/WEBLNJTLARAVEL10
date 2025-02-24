<?php

use Illuminate\Support\Facades\Route; // Mengimpor class Route untuk mendefinisikan rute aplikasi
use App\Http\Controllers\ItemController; // Mengimpor ItemController agar bisa digunakan dalam route
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // Menampilkan halaman utama (welcome.blade.php) ketika user mengakses "/"
});

// Menggunakan resource controller untuk otomatis membuat rute CRUD
Route::resource('items', ItemController::class);
// Rute ini secara otomatis membuat rute berikut:
// GET    /items           → index   (Menampilkan daftar item)
// GET    /items/create    → create  (Menampilkan form tambah item)
// POST   /items           → store   (Menyimpan item baru)
// GET    /items/{id}      → show    (Menampilkan detail item)
// GET    /items/{id}/edit → edit    (Menampilkan form edit item)
// PUT    /items/{id}      → update  (Memperbarui data item)
// DELETE /items/{id}      → destroy (Menghapus item)