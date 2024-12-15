<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function index()
    {
        // Ambil semua kurir dengan paginasi
        $couriers = Kurir::paginate(10); // Sesuaikan jumlah halaman jika perlu
        return view('couriers.index', compact('couriers'));
    }

    // Metode lainnya untuk create, edit, delete, dll.
}
