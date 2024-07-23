<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Log In Admin | {{ config('app.name') }}</title>

  {{-- AOS --}}
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css"
		rel="stylesheet"
	/>

	{{-- Flowbite --}}
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
		rel="stylesheet"
	/>

	{{-- Tailwind --}}
	@vite('resources/css/app.css')
</head>

<body>
  {{-- Logo kabinet mobile --}}
  <div 
    class="absolute inset-0 flex items-center justify-center -z-20 opacity-15 lg:hidden">
    <img 
      src="{{ config('app.logo_kabinet') }}" 
      alt="{{ config('app.nama_kabinet') }}"
    />
  </div>

  <div class="lg:flex">
    {{-- Kiri --}}
    <div class="lg:w-1/2 xl:max-w-screen-sm h-screen">
      {{-- Pojok Kiri --}}
      <div
        class="absolute py-8 w-full lg:pt-10 lg:pb-0 flex justify-center lg:justify-start lg:px-11">
        <div
          class="cursor-pointer flex items-center">
          <div>
            {{-- Logo --}}
            <img
              class="h-8"
              src="{{ config('app.logo_organisasi') }}"
              alt="{{ config('app.nama_organisasi') }}"
            />
          </div>
          
          {{-- Organisasi --}}
          <div
            class="text-2xl tracking-wide ml-2 font-semibold">
            {{ config('app.nama_singkatan_organisasi') }}
          </div>
        </div>
      </div>

      {{-- Form login --}}
      <div
        class="px-12 sm:px-24 md:px-48 lg:px-12 xl:px-24 xl:max-w-2xl h-full flex flex-col justify-center">
        <h2
          class="text-center text-4xl font-display font-semibold lg:text-left xl:text-5xl xl:text-bold">
          Log In Admin
        </h2>

        <div
          class="mt-12">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Pesan error --}}
            @if ($errors->any())
              <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" 
                id="alert-2"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">Log in failed!</span>
                  @foreach ($errors->all() as $error)
                    {{ $error }}
                  @endforeach
                </div>

                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                </button>
              </div>
            @endif

            {{-- Username --}}
            <div 
              class="relative z-0 w-full mb-5 group">
              <input  
                class="block py-2.5 px-0 w-full lg:text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange peer"
                name="username"
                id="username" 
                type="username"
                placeholder=" "
                autocomplete="username"
                required 
              />
              
              <label class="peer-focus:font-medium peer-first:z-50 absolute text-gray-500 lg:text-lg duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-orange peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" 
                for="username">
                Username
              </label>
            </div>
        
            {{-- Password --}}
            <div 
              class="relative z-0 w-full mb-5 group mt-8">
              <input  
                class="block py-2.5 px-0 w-full lg:text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-orange peer"
                name="password"
                id="password" 
                type="password"
                placeholder=" "
                required 
              />
              
              <label class="peer-focus:font-medium peer-first:z-50 absolute text-gray-500 lg:text-lg duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-orange peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" 
                for="password">
                Password
              </label>
            </div>

            {{-- Tombol login --}}
            <div
              class="mt-10">
              <button
                class="bg-orange text-gray-100 p-4 w-full rounded-full tracking-wide font-semibold font-display focus:outline-none focus:shadow-outline shadow-lg">
                Log In
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    {{-- Kanan --}}
    <div class="hidden lg:flex items-center justify-center flex-1 h-screen">
      {{-- Logo --}}
      <div class="max-w-[400px] transform duration-200 hover:scale-110 cursor-pointer">
        <img 
          class="" 
          src="{{ config('app.logo_kabinet') }}" 
          alt="{{ config('app.nama_kabinet') }}">
      </div>
    </div>
  </div>

  {{-- Flowbite --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>