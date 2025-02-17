<!DOCTYPE html>
<html>
<head>
    <title>Item List</title> <!-- Menentukan judul halaman -->
</head>
<body>
    <h1>Items</h1> <!-- Menampilkan judul halaman -->

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success')) 
        <p>{{ session('success') }}</p> <!-- Menampilkan pesan sukses -->
    @endif

    <!-- Link untuk menambah item baru -->
    <a href="{{ route('items.create') }}">Add Item</a>

    <ul>
        @foreach ($items as $item) <!-- Melakukan looping untuk menampilkan semua item -->
            <li>
                {{ $item->name }} <!-- Menampilkan nama item -->

                <!-- Link untuk mengedit item -->
                <a href="{{ route('items.edit', $item) }}">Edit</a> 

                <!-- Form untuk menghapus item -->
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf <!-- Token keamanan Laravel untuk mencegah CSRF attacks -->
                    @method('DELETE') <!-- Menggunakan method DELETE untuk menghapus data -->
                    <button type="submit">Delete</button> <!-- Tombol untuk menghapus item -->
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
