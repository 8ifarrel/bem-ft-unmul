@props(['page_title'])

<nav class="bg-white border-b md:fixed md:w-full md:z-20 md:top-0 start-0 shadow-lg">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    {{-- Logo --}}
    <a class="flex items-center space-x-3 rtl:space-x-reverse"
      href="{{ route('guest.beranda') }}">
			<img
        class="h-8"
        src="{{ config('app.logo_organisasi') }}" 
        alt="{{ config('app.nama_organisasi') }}"
      />
    </a>

    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      {{-- Tombol Posko Pengaduan --}}
      <a class="text-white bg-orange focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-4 py-2 text-center"
        href="{{ route('guest.posko-pengaduan.create') }}"
        type="button">
        Posko Pengaduan
      </a>

      {{-- Hamburger --}}
      <button class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" 
        type="button"
        data-collapse-toggle="navbar-sticky" 
        aria-controls="navbar-sticky"
        aria-expanded="false">
        <span class="sr-only">
          Buka menu
        </span>
        <svg class="w-5 h-5" 
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none" 
          viewBox="0 0 17 14">
          <path
            stroke="currentColor" 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" 
          />
        </svg>
      </button>
    </div>

    {{-- Menu --}}
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
      id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        {{-- Beranda --}}
        <li>
          <a class="block py-2 px-3 rounded md:p-0 {{ $page_title=='Beranda' ? 'bg-orange text-white md:text-orange md:bg-transparent' : '' }}"
            href="{{ route('guest.beranda') }}">
            Beranda
          </a>
        </li>
        {{-- Struktur Organisasi --}}
        <li>
          <a class="block py-2 px-3 rounded  {{ $page_title=='Struktur Organisasi' ? 'bg-orange text-white md:text-orange md:bg-transparent' : '' }} md:p-0"
            href="{{ route('guest.struktur-organisasi') }}">
            Struktur Organisasi
          </a>
        </li>
        {{-- Kabinet Sinergi Juang --}}
        <li>
          <a class="block py-2 px-3 rounded  {{ $page_title=='Kabinet Sinergi Juang' ? 'bg-orange text-white md:text-orange md:bg-transparent' : '' }} md:p-0"
            href="{{ route('guest.kabinet') }}">
            Kabinet Sinergi Juang
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>