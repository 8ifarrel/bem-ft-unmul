<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
	public function __invoke()
	{
		$page_title = 'Beranda';

		return view('pages.guest.beranda', [
			'page_title' => $page_title,
		]);
	}
}
