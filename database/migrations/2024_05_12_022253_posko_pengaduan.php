<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('posko_pengaduan', function (Blueprint $table) {
			$table->uuid('uuid')->primary();
			$table->string('nama_lengkap')->required()->default('Anonim');
			$table->string('nim')->required()->default('Anonim');
			$table->string('nomor_telepon')->required();
			$table->enum('prodi', [
					'Arsitektur',
					'Informatika',
					'Sistem Informasi',
					'Teknik Elektro',
					'Teknik Geologi',
					'Teknik Kimia',
					'Teknik Lingkungan',
					'Teknik Pertambangan',
					'Teknik Sipil'
				]
			);
			$table->enum('jenis_keluhan', [
					'Fasilitas Kampus',
					'UKT',
					'Administrasi',
					'Akademik',
					'Lainnya'
				]
			);
			$table->text('deskripsi_keluhan');
			$table->string('berkas_pendukung')->nullable();
			$table->enum(
				'status',
				[
					'Belum diproses',
					'Sedang diproses',
					'Selesai'
				]
			)->default('Belum diproses');
			$table->text('catatan_dari_bem')->nullable();
			$table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('posko_pengaduan');
	}
};
