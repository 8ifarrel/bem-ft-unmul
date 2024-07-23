<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<meta name="description"
		content="Website resmi organisasi Badan Eksekutif Mahasiswa Fakultas Teknik Universitas Mulawarman (BEM FT Unmul)" />

	<title>
		{{ config('app.name') }}
	</title>

	<link rel="icon" type="image/x-icon" href="{{ config('app.logo_organisasi') }}" />

	{{-- Flowbite --}}
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

	{{-- Tailwind --}}
	@vite('resources/css/app.css')
</head>

<body class="px-2 md:px-0 flex flex-col items-center justify-center h-screen bg-gray-100">
	<img style="width: 100%; max-width: 550px;" class="-z-20 opacity-15 absolute" src="{{ config('app.logo_kabinet') }}"
		alt="{{ config('app.nama_kabinet') }}" />

	<div class="mb-3">
		<img class="h-20 my-auto" src="{{ config('app.logo_organisasi') }}" alt="{{ config('app.nama_organisasi') }}" />
	</div>

	<div class="mb-7">
		<h2 class="text-xl md:text-3xl font-bold text-center mb-2  text-orange">
			Website Resmi
		</h2>

		<h1 class="text-2xl md:text-4xl font-bold text-center">
			Badan Eksekutif Mahasiswa Fakultas Teknik
		</h1>

		<h1 class="text-2xl md:text-4xl font-bold text-center">
			Universitas Mulawarman
		</h1>
	</div>

	<div id="countdown" class="flex space-x-4 text-center text-6xl font-semibold text-gray-300"></div>
	
	{{-- Flowbite --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>