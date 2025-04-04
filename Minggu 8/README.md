# PWL_POS J8 - File Import dan Export ke PDF dan Excel pada Laravel

## Praktikum 1 – Implementasi Upload File untuk import data:  
- Mengecek tabel `m_kategori` dan `m_barang` pada Database 
- Membuat file `template_barang.xlsx` dan disimpan di `public`
- Modifikasi view pada `barang/index.blade.php` untuk bisa menambahkan tombol menambah form untuk upload untuk import data barang 
- Membuat view untuk form upload/import file excel dan download file 
`template_barang.xlsx`. diberi nama file dengan nama `barang/import.blade.php`
- Modifikasi `route/web.php`
- Install library `phpoffice/phpspreadsheet`.
    ```cmd
    composer require phpoffice/phpspreadsheet
    ```
- Modifikasi file `BarangController.php` untuk memproses data 

📌 **File yang diubah/dibuat:**
- `template_barang.xlsx`
- `resources/views/barang/index.blade.php`
- `resources/views/barang/import.blade.php`
- `routes/web.php`
- `app/Http/Controllers/BarangController.php`
- `composer.json / composer.lock` (phpoffice/phpspreadsheet)

Hasil:<br>

> Disini kita bisa mengimport data barang dari file excel, dan kita juga bisa mendownload template yang sudah dibuat yaitu `template_barang.xlsx`:

![gif](img/P1.gif)

### Tugas 1 – Implementasi File Upload untuk Import Data:
1. Silahkan implementasikan praktikum 1 pada project kalian masing-masing untuk semua menu.
2. Amati dan jelaskan tiap tahapan yang kalian kerjakan, dan jabarkan dalam laporan (Sudah pada Readme ini)
3. Submit kode untuk impementasi prakktikum 1 pada repository github kalian. ([Link Commit](https://github.com/JihaR15/WEBLNJTLARAVEL10/commits/main/Minggu%208/PWL_POS))

## Praktikum 2 – Export Data ke Excel :
- Modifikasi `barang/index.blade.php`
- Tambahkan route pada `route/web.php` untuk bisa memproses export excel
- Tambahkan fungsi `export_excel()` pada file `BarangController.php`
    1. Ambil data barang yang akan kita export ke excel (tentu dengan menyertakan relasi kategori barang) 
    2. Load library Spreadsheet dan kita tentukan header data pada baris pertama di excel 
    3. Looping data yang telah kita dapatkan dari database, kemudian kita masukkan ke dalam cell excel
    4. Set lebar tiap kolom di excel untuk menyesuaikan dengan panjang karakter pada masing-masing kolom
    5. Set nama sheet, dan proses untuk dapat di download oleh pengguna

📌 **File yang diubah/dibuat:**
- `resources/views/barang/index.blade.php`
- `routes/web.php`
- `app/Http/Controllers/BarangController.php`

Hasil:<br>

> Disini kita bisa mengexport data yang ada dalam bentuk excel

![gif](img/P2.gif)

### Tugas 2 – Implementasi File Export Excel: 
1. Silahkan implementasikan praktikum 2 pada project kalian masing-masing untuk semua 
menu 
2. Amati dan jelaskan tiap tahapan yang kalian kerjakan, dan jabarkan dalam laporan (Sudah)
3. Submit kode untuk impementasi prakktikum 2 pada repository github kalian. ([Link Commit](https://github.com/JihaR15/WEBLNJTLARAVEL10/commits/main/Minggu%208/PWL_POS))

## Praktikum 3 – Implementasi Export PDF di Laravel dengan `dompdf`
- Install library dompdf
    ```cmd
    composer require barryvdh/laravel-dompdf
    ```
- Menambahkan tombol export ke pdf pada `barang/index.blade.php` 
- Menambahkan `route/web.php` untuk proses export pdf.
- Membuat fungsi `export_pdf()` pada `BarangController.php`
- Membuat view untuk dijadikan pdf dari layout html dan juga view untuk me-generate html untuk tampilan pdf yang akan disajikan. dengan nama `barang/export_pdf.blade.php`

📌 **File yang diubah/dibuat:**
- `resources/views/barang/index.blade.php`
- `routes/web.php`
- `app/Http/Controllers/BarangController.php`
- `barang/export_pdf.blade.php`

Hasil:<br>

> Maka akan muncul tombol baru yaitu Export Barang dengan logo pdf, yang jika diklik maka pdf akan langsung dibuatkan seperti dibawah ini:

![gif](img/P3.gif)


### Tugas 3 – Implementasi Export PDF pada Laravel :
1. Silahkan implementasikan export pdf pada project kalian masing-masing untuk semua menu 
2. Amati dan jelaskan tiap tahapan yang kalian kerjakan, dan jabarkan dalam laporan (Sudah)
3. Submit kode untuk impementasi export pdf pada repository github kalian. ([Link Commit](https://github.com/JihaR15/WEBLNJTLARAVEL10/commits/main/Minggu%208/PWL_POS))


### Tugas 4 – Implementasi Upload File Gambar :
1. Silahkan implementasikan fitur upload file untuk mengubah foto profile di project web kalian 
    > berikut merupakan tampilan dari create, detail, edit, dan hapus setelah modifikasi <br>
    ![gif](img/T4.gif)
2. Jelaskan tiap tahapan yang kalian kerjakan, dan jabarkan dalam laporan
    > 1. Membuat Migration untuk menambahkan kolom baru `picture_path` sebagai penyimpanan dari path foto profil di tabel `m_user` <br>
    ![img](img/T4-1.png)
    > 2. Menambahkan atribut baru pada `Fillable` di `UserModel.php` <br>
    ![img](img/T4-2.png)
    > 3. Modifikasi View user(create, edit, show, confirm) agar bisa menambahkan, mengedit dan menampilkan foto profile yang ingin/sudah di upload <br>
        - Create <br>
        ![img](img/T4-3a.png)
        - Edit <br>
        ![img](img/T4-3b_1.png)
        ![img](img/T4-3b_2.png)
        - Show <br>
        ![img](img/T4-3c.png)
        - Confirm <br>
        ![img](img/T4-3d.png)
    > 4. Menambahkan Validasi untuk `profile_picture` <br>
    ![img](img/T4-4.png)
    > 5. Modifikasi `UserController.php` di `store_ajax` dan `update_ajax` agar bisa menyimpan/mengupdate gambar pada `storage/app/public/profile_pictures` dan menyimpan/mengupdate pathnya di `picture_path` pada tabel `m_user` <br>
    ![img](img/T4-5.png)
3. Submit kode untuk impementasi export pdf pada repository github kalian. ([Link Commit](https://github.com/JihaR15/WEBLNJTLARAVEL10/commits/main/Minggu%208/PWL_POS))


