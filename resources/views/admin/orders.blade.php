@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <style>
        .btn-sm:hover {
    transform: scale(1.1);
    transition: 0.2s ease-in-out;
}

.badge {
    font-size: 0.9rem;
    padding: 5px 10px;
    border-radius: 10px;
}

    </style>

    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="fw-bold text-gradient">📦 Daftar Pesanan Admin</h1>
            <p class="text-muted">Kelola dan pantau semua pesanan pelanggan dengan mudah.</p>
        </div>
    </div>

    <!-- Daftar Pesanan -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header" style="background: linear-gradient(135deg, #3a6186 0%, #89253e 100%); color: white;">
                    <h5 class="card-title mb-0">Daftar Pesanan</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nama Pelanggan</th>
                                <th>Produk</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Cake Chocolate</td>
                                <td>Rp 150,000</td>
                                <td><span class="badge bg-warning">Menunggu</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Detail</button>
                                    <button class="btn btn-sm btn-success">Proses</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Smith</td>
                                <td>Cake Red Velvet</td>
                                <td>Rp 200,000</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Detail</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mike Tyson</td>
                                <td>Cake Strawberry</td>
                                <td>Rp 180,000</td>
                                <td><span class="badge bg-danger">Dibatalkan</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
