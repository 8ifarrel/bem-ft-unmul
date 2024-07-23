<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PoskoPengaduan;
use Ramsey\Uuid\Uuid;
use SebastianBergmann\Type\NullType;

class PoskoPengaduanController extends Controller
{
	public function create()
	{
		$page_title = 'Posko Pengaduan';

		return view('pages.guest.posko-pengaduan', [
			'page_title' => $page_title,
		]);
	}

	public function store(Request $request) {
		$validator = Validator::make($request->all(), [
			'nama_lengkap' => 'nullable|no_scripts',
			'nim' => 'nullable|numeric|no_scripts',
			'nomor_telepon' => 'required|no_scripts',
			'prodi' => 'required|no_scripts',
			'jenis_keluhan' => 'required|no_scripts',
			'deskripsi_keluhan' => 'required|no_scripts',
			'berkas_pendukung' => 'nullable|file',
			'berkas_pendukung.*' => 'mimes:pdf,docx,jpeg,jpg,png',
		]);

		if ($validator->passes()) {
			$pengaduan = new PoskoPengaduan;
			if (empty($request->input('nama_lengkap'))) {
				$pengaduan->nama_lengkap = 'Anonim';
			} else {
				$pengaduan->nama_lengkap = $request->input('nama_lengkap');
			}
			if (empty($request->input('nim'))) {
				$pengaduan->nim = 'Anonim';
			} else {
				$pengaduan->nim = $request->input('nim');
			}
			$pengaduan->nomor_telepon = $request->input('nomor_telepon');
			$pengaduan->prodi = $request->input('prodi');
			$pengaduan->jenis_keluhan = $request->input('jenis_keluhan');
			$pengaduan->deskripsi_keluhan = $request->input('deskripsi_keluhan');
			$pengaduan->updated_at = null;

			if ($request->hasFile('berkas_pendukung')) {
				$allowedExtensions = ['pdf', 'docx', 'jpeg', 'jpg', 'png'];
				$extension = strtolower($request->berkas_pendukung->getClientOriginalExtension());
				$uuid = Uuid::uuid4();
		
				if (in_array($extension, $allowedExtensions)) {
					$fileName = $uuid . '.' . $extension;
					$request->berkas_pendukung->storeAs('public/pengaduan', $fileName);
					$pengaduan->berkas_pendukung = $fileName;
				} else {
					return redirect()->back()->withErrors(['berkas_pendukung' => 'Tipe file tidak valid. Hanya file PDF, DOCX, JPG, JPEG, dan PNG yang diizinkan.']);
				}
			}

			$pengaduan->save();

			return redirect()->back()->with('success', 'Pengaduan Anda telah berhasil terkirim. Kami akan segera memprosesnya dan kami akan menghubungi Anda jika perlu. Terima kasih atas partisipasinya.');
		}

		if ($validator->fails()) {
			$errors = $validator->errors()->messages();
			return redirect()->back()->withErrors($errors);
		}
	}
}
