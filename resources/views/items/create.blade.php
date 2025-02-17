<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title> <!-- Menentukan judul halaman -->
</head>
<body>
    <h1>Add Item</h1> <!-- Menampilkan judul halaman -->

    <!-- Form untuk menambahkan item baru -->
    <form action="{{ route('items.store') }}" method="POST">
        @csrf <!-- Token keamanan Laravel untuk mencegah serangan CSRF -->

        <!-- Input untuk nama item -->
        <label for="name">Name:</label>
        <input type="text" name="name" required> <!-- Input teks dengan atribut required -->

        <br>

        <!-- Input untuk deskripsi item -->
        <label for="description">Description:</label>
        <textarea name="description" required></textarea> <!-- Textarea untuk deskripsi dengan atribut required -->

        <br>

        <!-- Tombol submit untuk menambahkan item -->
        <button type="submit">Add Item</button>
    </form>

    <!-- Link untuk kembali ke halaman daftar item -->
    <a href="{{ route('items.index') }}">Back to List</a>
</body>
</html>
