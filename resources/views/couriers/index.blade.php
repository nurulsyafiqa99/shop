<!-- resources/views/couriers/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Kurir</h1>

        <a href="{{ route('couriers.create') }}" class="btn btn-primary mb-3">Tambah Kurir</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kurir</th>
                    <th>Kontak</th>
                    <th>Jenis Kendaraan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($couriers as $courier)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $courier->name }}</td>
                        <td>{{ $courier->contact ?? '-' }}</td>
                        <td>{{ $courier->vehicle_type ?? '-' }}</td>
                        <td>{{ ucfirst($courier->status) }}</td>
                        <td>
                            <a href="{{ route('couriers.edit', $courier->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('couriers.destroy', $courier->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus kurir?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $couriers->links() }} <!-- Pagination Links -->
    </div>
@endsection
