<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KabinetController extends Controller
{
	public function __invoke()
	{
		$page_title = 'Kabinet Sinergi Juang';

		return view('pages.guest.kabinet', [
			'page_title' => $page_title,
		]);
	}
}
