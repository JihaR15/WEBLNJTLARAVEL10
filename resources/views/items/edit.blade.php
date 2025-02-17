<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title> <!-- Menentukan judul halaman -->
</head>
<body>
    <h1>Edit Item</h1> <!-- Menampilkan judul halaman -->

    <!-- Form untuk mengedit item -->
    <form action="{{ route('items.update', $item) }}" method="POST">
        @csrf <!-- Token keamanan Laravel untuk mencegah serangan CSRF -->
        @method('PUT') <!-- Mengubah method menjadi PUT karena update data -->

        <!-- Input untuk nama item -->
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $item->name }}" required> <!-- Menampilkan nama item yang sudah ada -->

        <br>

        <!-- Input untuk deskripsi item -->
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $item->description }}</textarea> <!-- Menampilkan deskripsi item yang sudah ada -->

        <br>

        <!-- Tombol submit untuk menyimpan perubahan -->
        <button type="submit">Update Item</button>
    </form>

    <!-- Link untuk kembali ke halaman daftar item -->
    <a href="{{ route('items.index') }}">Back to List</a>
</body>
</html>
