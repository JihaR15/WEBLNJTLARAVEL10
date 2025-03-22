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