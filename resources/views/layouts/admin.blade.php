<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta
		charset="utf-8"
	/>
	<meta 
		name="viewport" 
		content="width=device-width, initial-scale=1" 
	/>
	<meta 
		name="csrf-token" 
		content="{{ csrf_token() }}"
	/>

	<title>
		{{ $page_title }} | {{ config('app.name') }}
	</title>

	{{-- JQuery --}}
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer">
	</script>

	{{-- AOS --}}
	<link 
		href="https://unpkg.com/aos@2.3.1/dist/aos.css"
		rel="stylesheet"
	/>

	{{-- Flowbite --}}
	<link 
		href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
		rel="stylesheet"
	/>

	{{-- Fontawesome --}}
	<link 
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
	/>

	{{-- DataTables --}}
	<link
		href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css"
		rel="stylesheet"
	/>

	{{-- Tailwind --}}
	@vite('resources/css/app.css')

	{{-- Quill --}}
	<link 
		href="https://cdn.jsdelivr.net/npm/quill@2.0.1/dist/quill.snow.css" 
		rel="stylesheet"
	/>

	{{-- Trix --}}
	<link 
		href="https://unpkg.com/trix@2.0.8/dist/trix.css"
		rel="stylesheet" 
		type="text/css" 	
	/>

	{{-- Trix --}}
	<script 
		src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"
		type="text/javascript">
	</script>
</head>

<body>
	<x-admin.navbar	/>
    
	<x-admin.aside
		:page_title="$page_title"
	/>
	
	{{ $slot }}

	{{-- AOS --}}
	<script 
		src="https://unpkg.com/aos@2.3.1/dist/aos.js">
	</script>
	<script>
		AOS.init({
    	duration: 800,
    });
	</script>

	{{-- Flowbite --}}
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js">
	</script>	

	{{-- DataTables --}}
	<script
		src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js">
	</script>

	{{-- Quill --}}
	<script 
		src="https://cdn.jsdelivr.net/npm/quill@2.0.1/dist/quill.js">
	</script>
</body>

</html>