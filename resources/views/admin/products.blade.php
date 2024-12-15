@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <style>
        .table-hover tbody tr:hover {
    background-color: rgba(0, 123, 255, 0.1);
    transition: 0.3s ease-in-out;
}

.btn-sm {
    padding: 5px 10px;
    font-size: 0.85rem;
    margin-right: 5px;
}

.img-thumbnail {
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);

}

    </style>

    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="fw-bold text-gradient">🛍️ Kelola Produk Admin</h1>
            <p class="text-muted">Kelola daftar produk dengan mudah, termasuk menambah, mengedit, dan menghapus produk.</p>
            <a href="{{ route('products.create') }}" class="btn btn-primary mt-3">+ Tambah Produk</a>
        </div>
    </div>

    <!-- Daftar Produk -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header" style="background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%); color: white;">
                    <h5 class="card-title mb-0">Daftar Produk</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $pr)
                            <tr>
                                <td></td>
                                <td>
                                    <img src="{{ asset('/storage/public/products/'.$pr->image) }}" alt="Produk 1" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                                </td>
                                <td>{{ $pr->title }}</td>
                                <td><span class="badge bg-primary">Kue</span></td>
                                <td>{{ $pr->price }}</td>
                                <td>{{ $pr->stock }}</td>
                                <td>
                                    <a href="{{ route('products.show', 1) }}" class="btn btn-sm btn-info">Show</a>
                                    <a href="{{ route('products.edit', $pr->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('products.destroy', 1) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            <!-- Contoh Data Produk -->

                            <!-- Tambahkan produk lainnya di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
