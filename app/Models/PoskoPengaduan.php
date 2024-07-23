<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Ramsey\Uuid\Uuid;

class PoskoPengaduan extends Model
{
	use HasFactory;

	protected $primaryKey = 'uuid';

	protected $keyType = 'string';

	public $incrementing = false;

	protected $table = 'posko_pengaduan';

	protected $fillable = [
		'nama_lengkap',
		'nim',
		'nomor_telepon',
		'prodi',
		'jenis_keluhan',
		'deskripsi_keluhan',
		'berkas_pendukung',
	];

	public static function boot()
	{
		parent::boot();

		self::creating(function ($model) {
			$model->uuid = Uuid::uuid4();
		});
	}

	public function getUuidAttribute(): string
	{
		return $this->attributes['uuid'];
	}

	/**
	 * Nanti aja dipakai
	 * 
	 * Function untuk merapikan nomor telepon
	 */
	// public function setNomorTeleponAttribute($value)
	// {
	// 	$this->attributes['nomor_telepon'] = preg_replace('/[^0-9]/', '', $value);
	// }

	public function scopeByProdi($prodi)
	{
		return $this->where('prodi', $prodi);
	}

	public function scopeByJenisKeluhan($jenisKeluhan)
	{
		return $this->where('jenis_keluhan', $jenisKeluhan);
	}
}
