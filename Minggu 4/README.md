<table>
<tr>
<td>

# Laporan Jobsheet 04 - PWL
Model dan Eloquent ORM

</td>
<td valign="center" align="right" width="20%">
<img src="https://akuntansi.polinema.ac.id/wp-content/uploads/2024/02/logo_polinema.png" width="">
</td>
</tr>
</table>

---


### Dosen
Dimas Wahyu Wibowo, ST., MT

### Disusun Oleh
- **Nama**: Jiha Ramdhan  
- **NIM**: 2341720043  
- **No**: 14  
- **Kelas**: TI-2A  

## Prodi Teknik Informatika D-IV
Jurusan Teknologi Informasi - Politeknik Negeri Malang - 2025

Link Laporan PDF: https://drive.google.com/drive/folders/1NobBPV09FAJ8L-udhdtUA4Dv5bVwds_u?usp=sharing 

---

## Praktikum 1 - $fillable
**[Link Commit J4 Praktikum 1 - $fillable:](https://github.com/JihaR15/WEBLNJTLARAVEL10/commit/92a4e26f0416095d0bebbdc7d741823085782793)**

### Penjelasan
- **No 3**: Data `manajer 2` akan berhasil dibuat pada database. Semua atribut yang ada pada kode yang sesuai dengan `$fillable` akan disimpan ke database.
- **No 6**: Karena pada `UserModel.php` bagian field `password` dihapus, dan pada `UserController` tetap memasukkan data `password`, maka akan muncul error dan data `manajer 3` tidak berhasil dibuat. Hal ini karena hanya atribut yang terdaftar di `$fillable` yang disimpan ke database. 

---

## Praktikum 2.1 - Retrieving Single Models
**[Link Commit J4 Praktikum 2.1 - Retrieving Single Models](https://github.com/JihaR15/WEBLNJTLARAVEL10/commit/c7a68cbb30e8eec2461b041bdcded78aeb9f66ce)**

### Penjelasan
- **No 3**: Menggunakan `find($id)`, akan muncul detail informasi user dengan `ID` yang sesuai (misalnya ID = 1).
- **No 5**: Sama seperti sebelumnya, tetapi menggunakan kondisi `where` untuk mencari `level_id = 1`, lalu `first()` untuk mengambil satu data pertama yang ditemukan.
- **No 7**: Kode lebih ringkas dengan mengganti `where()->first()` menjadi `firstWhere()`.
- **No 9**: Mencari pengguna berdasarkan `id = 1`, tetapi hanya mengambil kolom `username` dan `nama`. Jika tidak ditemukan, muncul error 404.
- **No 11**: Jika tidak ditemukan data dengan `id = 20`, maka output akan error.

---

## Praktikum 2.2 - Not Found Exceptions
**[Link Commit J4 Praktikum 2.2 - Not Found Exceptions](https://github.com/JihaR15/WEBLNJTLARAVEL10/commit/218459e865ac9227256051fa456c87fe52498973)**

### Penjelasan
- **No 2**: Menggunakan `findOrFail()`:
  - Jika ditemukan, data pengguna akan dikembalikan.
  - Jika tidak ditemukan, akan otomatis menampilkan Error 404 (Not Found).
- **No 4**: Contoh error jika data tidak ditemukan.

---

## Praktikum 2.3 - Retrieving Aggregates
**[Link Commit J4 Praktikum 2.3 - Retreiving Aggregrates](https://github.com/JihaR15/WEBLNJTLARAVEL10/commit/fcae8f4ce6fd7a0575bc1451f96c0c585a252e69)**

### Penjelasan
- **No 2**: Menggunakan `dd($user);` akan menampilkan hasil jumlah pengguna dan menghentikan eksekusi program. `dd()` digunakan untuk debugging.

---

## Praktikum 2.4 - Retrieving or Creating Models
**[Link Commit J4 Praktikum 2.4 - Retreiving or Creating Models](https://github.com/JihaR15/WEBLNJTLARAVEL10/commit/e45d6951d83bb5cc1fa4514866bfc79c802958c7)**

### Penjelasan
- **No 3**: Jika data dengan `username = 'manager'` dan `nama = 'Manager'` ada di database, maka akan diambil dan ditampilkan.
- **No 5**: Jika data tidak ada, `firstOrCreate([...])` akan membuat pengguna baru dengan atribut yang diberikan.
- **No 7**: Jika data `manager` sudah ada, maka tidak dibuat ulang.
- **No 9**: `firstOrNew()` akan membuat instance model tanpa menyimpannya ke database.
- **No 11**: Menambahkan `$user->save();` akan menyimpan data baru ke database jika belum ada.

---

## Praktikum 2.5 - Attribute Changes
**[Link Commit J4 Praktikum 2.5 - Attribute Changes](https://github.com/JihaR15/WEBLNJTLARAVEL10/commit/84ea75894545d3f8b9b1918256ef451234833862)**

### Penjelasan
- **No 2**: Status perubahan data:
  1. Sebelum `save()`:
     - `isDirty()` → `true` (karena ada perubahan).
     - `isClean()` → `false` (karena perubahan belum disimpan).
  2. Setelah `save()`:
     - `isDirty()` → `false` (karena perubahan sudah disimpan).
     - `isClean()` → `true`.
- **No 4**: `wasChanged('username')` → `true` (karena username berubah dan disimpan).

---

## Praktikum 2.6 - Create, Read, Update, Delete (CRUD)
**[Link Commit J4 Praktikum 2.6 - Create, Read, Update, Delete (CRUD)](https://github.com/JihaR15/WEBLNJTLARAVEL10/commit/3df9cf80b043066d92a34d6f6f98e2505d8a760d)**

### Penjelasan
- **No 3**: Tampilan baru dengan link tambah user dan aksi ubah/hapus.
- **No 7**: Form untuk menambah user.
- **No 10**: Data berhasil ditambahkan ke database.
- **No 14**: Form edit dengan value sesuai data yang dipilih.
- **No 17**: Data dengan `id = 12` berhasil diubah setelah klik tombol ubah.
- **No 20**: Data dapat dihapus setelah menambahkan route dan controller untuk hapus.

---

## Praktikum 2.7 - Relationships
**[Link Commit J4 Praktikum 2.7 - Relationships](https://github.com/JihaR15/WEBLNJTLARAVEL10/commit/712f41711cd550c5d6e56c28772faa4e8f7bf91d)**

### Penjelasan
- **No 3**: Hasil debugging dengan `dd()`, menunjukkan ada 9 user tanpa error.
- **No 6**: Setelah relasi `belongsTo` antara `UserModel` dan `LevelModel`, data dari tabel `level` dapat ditampilkan bersama user.

---
