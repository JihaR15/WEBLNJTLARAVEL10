<table>
<tr>
<td>
    
# Jobsheet 3 | MIGRATION, SEEDER, DB FAÇADE, QUERY BUILDER, dan ELOQUENT ORM  
Jiha Ramdhan / 14 / 2341720043 / TI-2A
</td>
<td valign="center" align="right" width="20%">
<img src="https://akuntansi.polinema.ac.id/wp-content/uploads/2024/02/logo_polinema.png" width="">
</td>
</tr>
</table>

## Soal Praktikum & Jawaban

### 1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?
**Jawab:** APP_KEY digunakan untuk **enkripsi data dalam Laravel**, seperti session, token autentikasi, dan hashing password. Tanpa APP_KEY yang valid, fitur keamanan Laravel seperti enkripsi tidak akan bekerja dengan benar.

### 2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?
Nilai APP_KEY dapat digenerate dengan perintah berikut:
```bash
php artisan key:generate
```
Perintah ini akan menghasilkan kunci acak yang otomatis disimpan di file `.env`.

### 3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? dan untuk apa saja file migrasi tersebut?
Secara default, Laravel memiliki **3 file migrasi**, yaitu:
1. `create_users_table.php` → Untuk tabel pengguna (`users`).
2. `create_password_resets_table.php` → Untuk menyimpan token reset password.
3. `create_failed_jobs_table.php` → Untuk menyimpan informasi pekerjaan (jobs) yang gagal.

### 4. Secara default, file migrasi terdapat kode `$table->timestamps();`, apa tujuan/output dari fungsi tersebut?
`$table->timestamps();` akan menambahkan dua kolom otomatis:
- **`created_at`** → Menyimpan waktu saat data dibuat.
- **`updated_at`** → Menyimpan waktu saat data diperbarui.

### 5. Pada File Migrasi, terdapat fungsi `$table->id();` Tipe data apa yang dihasilkan dari fungsi tersebut?
Fungsi `$table->id();` akan menghasilkan kolom **BIGINT (20) AUTO_INCREMENT PRIMARY KEY** yang bernama `id`.

### 6. Apa bedanya hasil migrasi pada table `m_level`, antara menggunakan `$table->id();` dengan `$table->id('level_id');`?
- `$table->id();` → Membuat kolom **`id`** sebagai primary key dengan tipe **BIGINT AUTO_INCREMENT**.
- `$table->id('level_id');` → Sama seperti di atas, tetapi **nama kolom diubah menjadi `level_id`**.

### 7. Pada migration, Fungsi `->unique()` digunakan untuk apa?
Fungsi `->unique()` digunakan untuk memastikan bahwa nilai dalam kolom tersebut **tidak boleh duplikat** di dalam tabel. Contoh:
```php
$table->string('email')->unique(); // Email tidak boleh duplikat
```

### 8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom `level_id` pada tabel `m_user` menggunakan `$table->unsignedBigInteger('level_id')`, sedangkan kolom `level_id` pada tabel `m_level` menggunakan `$table->id('level_id')`?
- **`$table->id('level_id')`** di `m_level` → Membuat `level_id` sebagai **primary key**.
- **`$table->unsignedBigInteger('level_id')`** di `m_user` → Membuat kolom yang sesuai dengan tipe primary key di `m_level` untuk dijadikan **foreign key**.

### 9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class `Hash`? dan apa maksud dari kode program `Hash::make('1234');`?
Class `Hash` digunakan untuk **mengenkripsi password** agar lebih aman.
Kode berikut:
```php
Hash::make('1234');
```
akan mengubah `1234` menjadi hash **bcrypt**, misalnya:
```
$2y$10$KQn1Gz8Uj7F7wE...
```

### 10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (`?`), apa kegunaan dari tanda tanya (`?`) tersebut?
Tanda `?` digunakan dalam **parameter binding** untuk mencegah **SQL Injection**. Contoh:
```php
DB::insert('INSERT INTO users (name, email) VALUES (?, ?)', ['John Doe', 'john@example.com']);
```

### 11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode:
```php
protected $table = 'm_user';
protected $primaryKey = 'user_id';
```
Kode ini digunakan untuk:
- **`$table = 'm_user'`** → Menentukan bahwa model berhubungan dengan tabel `m_user`.
- **`$primaryKey = 'user_id'`** → Menentukan bahwa primary key tabel ini adalah `user_id`, bukan `id` (default Laravel).

### 12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM)? Jelaskan.
- **DB Façade** → Digunakan untuk **raw query SQL langsung**. Cepat, tetapi kurang fleksibel.
- **Query Builder** → Lebih mudah digunakan daripada raw query, mendukung berbagai database tanpa harus mengubah sintaks SQL.
- **Eloquent ORM** (**Paling mudah!**) → Menggunakan konsep **Object-Oriented**, sehingga lebih readable dan efisien untuk CRUD.

    jadi **Eloquent ORM lebih mudah dan lebih direkomendasikan** untuk operasi CRUD karena pendekatannya berbasis model, lebih aman, dan lebih mudah dipahami.




