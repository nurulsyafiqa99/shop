@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Penjualan</h5>
                <p class="card-text">Rp. 25,000,000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Pesanan Hari Ini</h5>
                <p class="card-text">15 Pesanan</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-warning mb-3">
            <div class="card-body">
                <h5 class="card-title">Produk Terjual</h5>
                <p class="card-text">120 Kue</p>
            </div>
        </div>
    </div>
    <div class="card mb-4">
    <div class="card-header">Statistik Penjualan Bulanan</div>
    <div class="card-body">
        <canvas id="salesChart" width="400" height="200"></canvas>
        
    </div>
</div>
</div>
@endsection
