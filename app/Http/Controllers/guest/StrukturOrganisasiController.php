<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;

class StrukturOrganisasiController extends Controller
{

	public function __invoke()
	{
		$page_title = 'Struktur Organisasi';

		return view('pages.guest.struktur-organisasi', [
			'page_title' => $page_title,
		]);
	}
}
