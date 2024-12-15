@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">

    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="fw-bold text-gradient">🍰 <span style="font-family: 'Pacifico', cursive;">Cake Shop</span> Dashboard 🍰</h1>
            <p class="text-muted">Selamat datang kembali, Admin! Lihat perkembangan terkini dari toko Anda.</p>
        </div>
    </div>

    <!-- Statistik Dashboard -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-0" style="background: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%); color: white;">
                <div class="card-body text-center">
                    <i class="fas fa-cake fs-1 mb-3"></i>
                    <h5 class="card-title">Total Produk</h5>
                    <p class="card-text fs-3">5</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0" style="background: linear-gradient(135deg, #56ccf2 0%, #2f80ed 100%); color: white;">
                <div class="card-body text-center">
                    <i class="fas fa-dollar-sign fs-1 mb-3"></i>
                    <h5 class="card-title">Penjualan Hari Ini</h5>
                    <p class="card-text fs-3">Rp 5,000,000</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white;">
                <div class="card-body text-center">
                    <i class="fas fa-box fs-1 mb-3"></i>
                    <h5 class="card-title">Pesanan Baru</h5>
                    <p class="card-text fs-3">32</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0" style="background: linear-gradient(135deg, #f79d00 0%, #64f38c 100%); color: white;">
                <div class="card-body text-center">
                    <i class="fas fa-exclamation-circle fs-1 mb-3"></i>
                    <h5 class="card-title">Stok Habis</h5>
                    <p class="card-text fs-3">12</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik Penjualan -->
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-gradient">📊 Grafik Penjualan (Bulan Ini)</h5>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Aktivitas Terbaru -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-header" style="background: linear-gradient(135deg, #3a6186 0%, #89253e 100%); color: white;">
                    <h5 class="card-title mb-0">⚡ Aktivitas Terbaru</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pesanan #1023 diproses
                            <span class="badge bg-success rounded-pill">Sukses</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Produk baru "Cakes Choco" ditambahkan
                            <span class="badge bg-info rounded-pill">Baru</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pembeli baru memberikan ulasan 5 bintang
                            <span class="badge bg-warning rounded-pill">Ulasan</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Stok produk #45 diperbarui
                            <span class="badge bg-danger rounded-pill">Perhatian</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Penjualan',
                data: [120, 150, 180, 220, 250, 300],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush
