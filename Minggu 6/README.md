# PWL_POS - AJAX Form & Client Validation

## Praktikum

### 1. Modal AJAX Tambah Data
- Menambahkan data **user** menggunakan modal form dengan AJAX.
- Validasi form dilakukan dengan **jQuery Validation**.
- SweetAlert digunakan untuk notifikasi keberhasilan/gagal.

📌 **File yang diubah/dibuat:**
- `resources/views/user/index.blade.php`
- `resources/views/user/create_ajax.blade.php`
- `app/Http/Controllers/UserController.php`
- `routes/web.php`

- Hasil:<br>

```cmd
Akan muncul tombol baru 'Tambah Ajax'
```
![TambahAjax](img/tambahajax.png)
```cmd
Modal Ajax
```
![ModalAjax](img/modalajax.png)
```cmd
Ketika sudah diisi dan klik simpan
```
![SuccessAjax](img/successajax.png)


### 2. Modal AJAX Edit Data
- Menggunakan AJAX untuk menampilkan modal edit data user.
- Data yang diubah dikirim ke server dengan metode **PUT**.
- Validasi dilakukan menggunakan jQuery Validation.

📌 **File yang diubah/dibuat:**
- `resources/views/user/edit_ajax.blade.php`
- `app/Http/Controllers/UserController.php`
- `routes/web.php`

- Hasil:<br>

```cmd
Tampilan Modal ketika meng-klik tombol edit
```
![EditAjax](img/editajax.png)
```cmd
Ketika data dirubah dan disimpan
```
![EditSuccessAjax](img/editsuccess.png)

### 3. Modal AJAX Hapus Data
- Konfirmasi penghapusan data menggunakan modal AJAX.
- Setelah konfirmasi, data akan dihapus menggunakan metode **DELETE**.

📌 **File yang diubah/dibuat:**
- `resources/views/user/confirm_ajax.blade.php`
- `app/Http/Controllers/UserController.php`
- `routes/web.php`

- Hasil:<br>

```cmd
Tampilan Modal ketika meng-klik tombol delete
```
![deleteAjax](img/delete.png)
```cmd
Tampilan ketika mengklik "Ya, Hapus"
```
![DeleteSuccessAjax](img/deletesuccess.png)

## Tugas
Implementasikan  Ajax Form dan Client Validation dengan 
jQuery Validation untuk:
- Tabel `m_level`
- Tabel `m_kategori`
- Tabel `m_supplier`
- Tabel `m_barang`

Jawab :
## Tabel `m_level`
```
Tambah Ajax Level
```
![Tambah](img/tugas/level/1.png)
```
Detail Ajax Level
```
![Detail](img/tugas/level/2.png)
```
Edit Ajax Level
```
![Edit](img/tugas/level/3.png)
```
Hapus Ajax Level
```
![Hapus](img/tugas/level/4.png)

## Tabel `m_kategori`
```
Tambah Ajax Kategori
```
![Tambah](img/tugas/kategori/1.png)
```
Detail Ajax Kategori
```
![Detail](img/tugas/kategori/2.png)
```
Edit Ajax Kategori
```
![Edit](img/tugas/kategori/3.png)
```
Hapus Ajax Kategori
```
![Hapus](img/tugas/kategori/4.png)

## Tabel `m_supplier`
```
Tambah Ajax Supplier
```
![Tambah](img/tugas/supplier/1.png)
```
Detail Ajax Supplier
```
![Detail](img/tugas/supplier/2.png)
```
Edit Ajax Supplier
```
![Edit](img/tugas/supplier/3.png)
```
Hapus Ajax Supplier
```
![Hapus](img/tugas/supplier/4.png)

## Tabel `m_barang`
```
Tambah Ajax Barang
```
![Tambah](img/tugas/barang/1.png)
```
Detail Ajax Barang
```
![Detail](img/tugas/barang/2.png)
```
Edit Ajax Barang
```
![Edit](img/tugas/barang/3.png)
```
Hapus Ajax Barang
```
![Hapus](img/tugas/barang/4.png)