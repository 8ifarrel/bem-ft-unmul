<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PoskoPengaduan;
use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;

class AdminPoskoPengaduanController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index() {
    $page_title = 'Posko Pengaduan';
		$total_laporan_count = PoskoPengaduan::count();
		$laporan_belum_diproses_count = PoskoPengaduan::where('status', 'Belum diproses')->count();
		$laporan_sedang_diproses_count = PoskoPengaduan::where('status', 'Sedang diproses')->count();
		$laporan_selesai_count = PoskoPengaduan::where('status', 'Selesai')->count();
    $posko_pengaduan = PoskoPengaduan::select('uuid', 
																							'nama_lengkap', 
																							'nim',
																							'nomor_telepon',
																							'prodi',
																							'jenis_keluhan',
																							'deskripsi_keluhan',
																							'berkas_pendukung',
																							'created_at',
																							'status')->get();

    return view('pages.admin.posko-pengaduan.index', [
      'page_title' => $page_title,
			'posko_pengaduan' => $posko_pengaduan,
			'total_laporan_count' => $total_laporan_count,
			'laporan_belum_diproses_count' => $laporan_belum_diproses_count,
			'laporan_sedang_diproses_count' => $laporan_sedang_diproses_count,
			'laporan_selesai_count' => $laporan_selesai_count,
    ]);
  }

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $uuid) {
    $posko_pengaduan = PoskoPengaduan::where('uuid', $uuid)->first();

    if (!$posko_pengaduan) {
      return abort(404);
    }

		$page_title = 'Kelola Posko Pengaduan';

		return view('pages.admin.posko-pengaduan.edit', [
			'page_title' => $page_title,
			'posko_pengaduan' => $posko_pengaduan,
		]);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $uuid)
	{
		$posko_pengaduan = PoskoPengaduan::find($uuid);

		$status = $request->input('status');
		$catatan_dari_bem = $request->input('catatan_dari_bem');

		$posko_pengaduan->status = $status;
		$posko_pengaduan->catatan_dari_bem = $catatan_dari_bem;

		$posko_pengaduan->save();

		return redirect()->back()->with('success', 'Laporan pengaduan berhasil diproses!');
	}
}
