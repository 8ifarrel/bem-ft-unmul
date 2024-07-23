<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PoskoPengaduan;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
	public function __invoke() {
		$page_title = 'Dashboard';
		$total_laporan_count = PoskoPengaduan::count();
		$laporan_belum_diproses_count = PoskoPengaduan::where('status', 'Belum diproses')->count();
		$laporan_sedang_diproses_count = PoskoPengaduan::where('status', 'Sedang diproses')->count();
		$laporan_selesai_count = PoskoPengaduan::where('status', 'Selesai')->count();

		return view('pages.admin.dashboard', [
			'page_title' => $page_title,
			'total_laporan_count' => $total_laporan_count,
			'laporan_belum_diproses_count' => $laporan_belum_diproses_count,
			'laporan_sedang_diproses_count' => $laporan_sedang_diproses_count,
			'laporan_selesai_count' => $laporan_selesai_count,
		]);
	}
}